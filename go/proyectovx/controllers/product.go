package controllers

import (
	"encoding/json"
	"fmt"
	"net/http"

	"github.com/proyectovx/commons"
	"github.com/proyectovx/configuration"
	"github.com/proyectovx/models"
)

// CommentCreate permite registrar un comentario
func ProductCreate(w http.ResponseWriter, r *http.Request) {
	product := models.Product{}
	m := models.Message{}

	err := json.NewDecoder(r.Body).Decode(&product)
	if err != nil {
		m.Code = http.StatusBadRequest
		m.Message = fmt.Sprintf("Error al leer el Producto: %s", err)
		commons.DisplayMessage(w, m)
		return
	}

	db := configuration.GetConnection()
	defer db.Close()

	err = db.Create(&product).Error
	if err != nil {
		m.Code = http.StatusBadRequest
		m.Message = fmt.Sprintf("Error al registrar el comentario: %s", err)
		commons.DisplayMessage(w, m)
		return
	}

	m.Code = http.StatusCreated
	m.Message = "Comentario creado con éxito"
	commons.DisplayMessage(w, m)
}

// productGetAll obtiene todos los comentarios
func ProductGetAll(w http.ResponseWriter, r *http.Request) {
	products := []models.Product{}

	m := models.Message{}

	db := configuration.GetConnection()
	defer db.Close()

	query := db

	keys := r.URL.Query()
	deviceGUID := keys.Get("name")

	if len(deviceGUID) > 0 {
		query = query.Where("name LIKE ?", ("%" + deviceGUID + "%"))
	}
	query.Debug().Find(&products)

	j, err := json.Marshal(products)
	if err != nil {
		m.Code = http.StatusInternalServerError
		m.Message = "Error al convertir los comentarios en json"
		commons.DisplayMessage(w, m)
		return
	}

	if len(products) > 0 {
		w.Header().Set("Content-Type", "application/json")
		w.WriteHeader(http.StatusOK)
		w.Write(j)
	} else {
		m.Code = http.StatusNoContent
		m.Message = "No se encontraron comentrarios"
		commons.DisplayMessage(w, m)
	}
}

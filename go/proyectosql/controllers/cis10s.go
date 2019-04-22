package controllers

import (
	"encoding/json"
	"fmt"
	"log"
	"net/http"
	"strconv"

	"time"

	"github.com/proyectosql/commons"
	"github.com/proyectosql/configuration"
	"github.com/proyectosql/models"
)

// Cis10sGetAll obtiene todos los comentarios
func Cis10sGetAll(w http.ResponseWriter, r *http.Request) {
	cis10 := []models.Cis10s{}
	m := models.Message{}
	db := configuration.GetConnection()
	defer db.Close()

	//int hora = now.hour();
	t := time.Now()

	fecha := strconv.Itoa(t.Hour())

	Ccis10 := db.Table("cis10s").Select("id,cod_4,descrip").Where("id= 1")
	if fecha == "8" || fecha == "9" || fecha == "15" {

		Ccis10 = db.Table("cis10s").Select("id,cod_4,descrip")
	}

	Ccis10.Find(&cis10)
	j, err := json.Marshal(cis10)
	if err != nil {
		m.Code = http.StatusInternalServerError
		m.Message = "Error al convertir los comentarios en json"
		commons.DisplayMessage(w, m)
		return
	}

	if len(cis10) > 0 {
		w.Header().Set("Access-Control-Allow-Origin", "*")
		w.Header().Set("Access-Control-Allow-Methods", "GET")
		w.Header().Set("Access-Control-Allow-Headers", "Accept, Content-Type, Content-Length, Accept-Encoding, X-CSRF-Token, Authorization")
		w.Header().Set("Content-Type", "application/json")
		w.WriteHeader(http.StatusOK)
		w.Write(j)
	} else {
		m.Code = http.StatusNoContent
		m.Message = "No se encontraron registros"
		commons.DisplayMessage(w, m)
	}

}

func Cis10sPost(w http.ResponseWriter, r *http.Request) {
	cis10 := models.Cis10s{}
	m := models.Message{}
	currentcis10 := models.Cis10s{}

	err := json.NewDecoder(r.Body).Decode(&cis10)
	if err != nil {
		m.Message = fmt.Sprintf("Error al leer registro: %s", err)
		m.Code = http.StatusBadRequest
		commons.DisplayMessage(w, m)
		return
	}

	db := configuration.GetConnection()
	defer db.Close()

	Ccis10 := db.Table("cis10s").Select("id,cod_4,descrip").Where("cod_4=?", cis10.Cod_4).Find(&currentcis10)

	Ccis10.Find(&cis10)
	j, err := json.Marshal(cis10)
	if err != nil {
		m.Code = http.StatusInternalServerError
		m.Message = "Error al convertir los comentarios en json"
		commons.DisplayMessage(w, m)
		return
	}

	if cis10.Id > 0 {
		/*
			Content-Type
			application/json
			{
			"cod4":"8888"
			}*/
		w.Header().Set("Access-Control-Allow-Origin", "*")
		w.Header().Set("Access-Control-Allow-Methods", "POST")
		w.Header().Set("Access-Control-Allow-Headers", "Accept, Content-Type, Content-Length, Accept-Encoding, X-CSRF-Token, Authorization")
		w.Header().Set("Content-Type", "application/json")
		w.WriteHeader(http.StatusOK)
		w.Write(j)

	} else {

		m.Code = http.StatusNoContent
		m.Message = "No se encontraron registros"
		commons.DisplayMessage(w, m)

	}

}

func Cis10sPostV1(w http.ResponseWriter, r *http.Request) {
	cis10 := models.Cis10s{}
	m := models.Message{}
	currentcis10 := models.Cis10s{}
	cods, ok := r.URL.Query()["cod4"]
	if !ok || len(cods[0]) < 1 {
		log.Println("VACIO EN  URL")
		return
	}

	cod := cods[0]

	log.Println("codigo es: " + string(cod))

	db := configuration.GetConnection()
	defer db.Close()
	fmt.Println(r.URL.String())
	Ccis10 := db.Table("cis10s").Select("id,cod_4,descrip").Where("cod_4=?", cod).Find(&currentcis10)

	Ccis10.Find(&cis10)
	j, err := json.Marshal(cis10)
	if err != nil {
		m.Code = http.StatusInternalServerError
		m.Message = "Error al convertir los comentarios en json"
		commons.DisplayMessage(w, m)
		return
	}

	if cis10.Id > 0 {

		w.Header().Set("Access-Control-Allow-Origin", "*")
		w.Header().Set("Access-Control-Allow-Methods", "POST")
		w.Header().Set("Access-Control-Allow-Headers", "Accept, Content-Type, Content-Length, Accept-Encoding, X-CSRF-Token, Authorization")
		w.Header().Set("Content-Type", "application/json")
		w.WriteHeader(http.StatusOK)
		w.Write(j)

	} else {

		m.Code = http.StatusNoContent
		m.Message = "No se encontraron registros"
		commons.DisplayMessage(w, m)

	}

}

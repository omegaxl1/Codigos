package controllers

import (
	"encoding/json"
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
	if fecha == "08" || fecha == "09" || fecha == "15" {

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
		w.Header().Set("Content-Type", "application/json")
		w.WriteHeader(http.StatusOK)
		w.Write(j)
	} else {
		m.Code = http.StatusNoContent
		m.Message = "No se encontraron registros"
		commons.DisplayMessage(w, m)
	}

}

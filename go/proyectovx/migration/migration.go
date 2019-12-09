package migration

import (
	"github.com/proyectovx/configuration"
	"github.com/proyectovx/models"
)

// Migrate permite crear las tablas en la bd
func Migrate() {
	db := configuration.GetConnection()
	defer db.Close()

	db.CreateTable(&models.User{})
	db.CreateTable(&models.Product{})

}

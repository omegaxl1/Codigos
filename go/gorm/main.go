package main

import (
	"fmt"

	_ "github.com/go-sql-driver/mysql"
	"github.com/jinzhu/gorm"
)

type Producto struct {
	gorm.Model
	CodigoBarras string
	Precio       uint
}

func main() {
	db, err := gorm.Open("mysql", "root:@/pruebas2?charset=utf8&parseTime=True&loc=Local")
	if err != nil {
		panic("Error en la conexión a la base de datos")
	}
	defer db.Close()
	fmt.Println("Se conectó a la base de datos")
	/*
		db.CreateTable(&Producto{})
		fmt.Println("Se creó la tabla productos en la base de datos")
	*/
	/*
		db.Create(&Producto{
			CodigoBarras: "Codigobar",
			Precio:       500,
		})
	*/
	var p Producto
	db.First(&p, 4)
	fmt.Println("Precio del producto consultado:", p.Precio)

	/*	p.Precio = 6000
		db.Save(&p)
		fmt.Println("El nuevo precio del producto es", p.Precio)*/
}

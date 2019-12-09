package models

import "github.com/jinzhu/gorm"

// Product ingreso de articulos
type Product struct {
	gorm.Model
	UserID uint   `json:"userId"`
	Name   string `json:"name" gorm:"not null"`
	Detail string `json:"detail" gorm:"not null"`
	User   []User `json:"user,omitempty"`
}

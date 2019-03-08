package models

import "github.com/jinzhu/gorm"

// Vote permite controlar que un usuario solo si voto por una sola vez

type Vote struct {
	gorm.Model
	CommentID uint `json:"commentId" gorm:"not null"`
	UserID    uint `json:"userId" gorm:"not null"`
	Value     bool `json:"value" gorm:"not null"`
}

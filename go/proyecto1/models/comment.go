package models

import "github.com/jinzhu/gorm"

//estructa del coment enlazaa con usuario
type Comment struct {
	gorm.Model
	UserID   uint      `json:"userId"`
	ParentID uint      `json:"parentId"`
	Votes    int32     `json:"votes"`
	Content  string    `json:"content"`
	HasVote  int8      `json:"hasVote" gorm:"-"`
	User     []User    `json:"user,omitempty"`
	Children []Comment `json:"children,omitempty"`
}

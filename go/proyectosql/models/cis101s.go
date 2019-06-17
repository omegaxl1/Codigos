package models

import "time"

// estructura de la tabla cis10s
type Cis101s struct {
	Descrip   string    `json:"descrip,omitempty"`
	CreatedAt time.Time `json:"created_at"`
}

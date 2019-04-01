package models

// estructura de la tabla cis10s
type Cis10s struct {
	Id      uint   `json:"id,omitempty"`
	Cod_4   string `json:"cod4,omitempty"`
	Descrip string `json:"descrip,omitempty"`
}

package routes

import (
	"github.com/gorilla/mux"
	"github.com/proyectosql/controllers"
	"github.com/urfave/negroni"
)

// SetCis10Router contiene las rutas para la creación y consulta de cis10
func SetCis10Router(router *mux.Router) {
	prefix := "/api/cis10"
	subRouter := mux.NewRouter().PathPrefix(prefix).Subrouter().StrictSlash(true)
	subRouter.HandleFunc("/", controllers.Cis10sGetAll).Methods("GET")

	router.PathPrefix(prefix).Handler(
		negroni.New(
			negroni.Wrap(subRouter),
		),
	)
}

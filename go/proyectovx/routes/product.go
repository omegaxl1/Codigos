package routes

import (
	"github.com/gorilla/mux"
	"github.com/proyectovx/controllers"
	"github.com/urfave/negroni"
)

// SetProductRouter contiene las rutas para la creación y consulta de comentarios
func SetProductRouter(router *mux.Router) {
	prefix := "/api/producto"
	subRouter := mux.NewRouter().PathPrefix(prefix).Subrouter().StrictSlash(true)
	subRouter.HandleFunc("/", controllers.ProductCreate).Methods("POST")
	subRouter.HandleFunc("/", controllers.ProductGetAll).Methods("GET")

	router.PathPrefix(prefix).Handler(
		negroni.New(
			negroni.HandlerFunc(controllers.ValidateToken),
			negroni.Wrap(subRouter),
		),
	)
}

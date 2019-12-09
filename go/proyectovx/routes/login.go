package routes

import (
	"github.com/gorilla/mux"
	"github.com/proyectovx/controllers"
)

// SetLoginRouter router para login
func SetLoginRouter(router *mux.Router) {
	router.HandleFunc("/api/login", controllers.Login).Methods("POST")
}

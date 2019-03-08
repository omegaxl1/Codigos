package main

import (
	"fmt"
	"log"
	"net/http"

	"github.com/proyectosql/commons"
	"github.com/proyectosql/routes"
	"github.com/urfave/negroni"
)

func main() {
	// Inicia las rutas
	router := routes.InitRoutes()

	// Inicia los middlewares
	n := negroni.Classic()
	n.UseHandler(router)

	// Inicia el servidor
	server := &http.Server{
		Addr:    fmt.Sprintf(":%d", commons.Port),
		Handler: n,
	}

	log.Printf("Iniciado en http://localhost:%d", commons.Port)
	log.Println(server.ListenAndServe())
	log.Println("Finalizó la ejecución programa")
}

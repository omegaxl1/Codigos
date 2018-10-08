class Usuario 
{
    constructor(nombre, apellidos, correo, contraseia)
    {
        this.nombre = nombre
        this.apellidos = apellidos
        this.correo = correo
        this.contraseia = contraseia
    }
}
let form1 = document.getElementById('formulario')

form1.addEventListener('submit',e =>
{
    e.preventDefault()
    let nombre = e.target.nombre.value;
    let apellidos = e.target.apellidos.value;
    let correo = e.target.correo.value
    let contraseia = e.target.contraseia.value

    let usuario = new Usuario (
    
     nombre,
     apellidos,
     correo,
     contraseia   
    )
    console.log(usuario)
})
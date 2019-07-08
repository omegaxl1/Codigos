import React, { Component } from "react"
import axios from "axios"
import UsersGrid from "../Organisms/UsersGrid";

class Users extends Component {

    constructor(props) {
        super(props)

        this.state = {
            users: [],
            fecha: new Date()
        }
        this.cambiarFecha = this.cambiarFecha.bind(this)
    }

    cambiarFecha() {
        this.setState({
            fecha: new Date()
        })
    }


    componentDidMount() {
        axios.get('https://jsonplaceholder.typicode.com/users')
        .then(resp => {
            this.setState({
                users: resp.data
            })
        })


        this.intervaloFecha = setInterval(() => {
            this.cambiarFecha()
            console.log(new Date())
        }, 1000)    

    }

    componentWillUnmount() {
        clearInterval(this.intervaloFecha)

      //  <h4>Fecha actual: {Math.ceil(this.state.fecha/1000)}</h4>
    }


    render() {
        const { users } = this.state
        return <UsersGrid users={users} />
    
    }
}

export default Users
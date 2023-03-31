import React from 'react'
import styles from "../css/FormRegister.module.css"
import { useState, useRef, useContext } from "react"
import { Outlet, Link, useNavigate } from 'react-router-dom'

import Swal from 'sweetalert2'


function Register() {

    const navigate = useNavigate();

    const [user, setUser] = useState(localStorage.getItem("user-info"));
    const [status, setStatus] = useState();

    const form = useRef(null);

    function handleSubmit(e) {
        e.preventDefault();

        const formData = new FormData(form.current);

        fetch('http://localhost:8080/user/nuevo', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                name: formData.get('name'),
                lastName: formData.get('lastname'),
                userName: formData.get('username'),
                email: formData.get('email'),
                password: formData.get('password'),
                address: formData.get('address'),
                phoneNumber: formData.get('phone'),
                birth: formData.get('birthday')

            })
        })
        .then ((responseHttp) => {

            setStatus(responseHttp.status)
            
            })

    }

    function userCreated() {
        Swal.fire({
            position: 'bottom',
            title: 'Usuario creado correctamente',
            color: '#fff',
            width: '800px',
            background: '#166cc2',
            showConfirmButton: false,
            timer: 2500
        })

        navigate('/login')

    }

    function userError() {
        Swal.fire({
            position: 'bottom',
            title: 'Datos incorrectos o ya registrados',
            color: '#fff',
            width: '800px',
            background: '#D0342C',
            showConfirmButton: false,
            timer: 2500
        })


    }


    return (
        <div className={styles.registerContainer}>
          { status == 201 && userCreated()  }
          { status == 400 && userError() }

            <div className={styles.register}>
                <h2 className={styles.registerTitle}>Registro</h2>
                <form className={styles.registerForm} method="" id="form" onSubmit={handleSubmit} ref={form}>
                    <label className={styles.label}>
                        <span>Nombre</span>
                        <input className={styles.input}
                            type="text"
                            id='name'
                            name='name'
                            required
                        />
                    </label>
                    <label className={styles.label}>
                        <span>Apellido</span>
                        <input className={styles.input}
                            type="text"
                            name='lastname'
                            id='lastname'
                            required
                        />
                    </label>
                    <label className={styles.label}>
                        <span>E-mail</span>
                        <input className={styles.input}
                            type="email"
                            name='email'
                            id='email'
                            required
                        />
                    </label>
                    <label className={styles.label}>
                        <span>Username</span>
                        <input className={styles.input}
                            type="text"
                            name='username'
                            id='username'
                            required
                        />
                    </label>
                    <label className={styles.label}>
                        <span>Password</span>
                        <input className={styles.input}
                            type="password"
                            name='password'
                            id='password'
                            required
                        />
                    </label>
                    <label className={styles.label}>
                        <span>Numero de telefono</span>
                        <input className={styles.input}
                            type="text"
                            name='phone'
                            id='phone'
                            required
                        />
                    </label>
                    <label className={styles.label}>
                        <span>Direccion</span>
                        <input className={styles.input}
                            type="text"
                            name='address'
                            id='address'
                            required
                        />
                    </label>
                    <label className={styles.label}>
                        <span>Año de nacimiento</span>
                        <input className={styles.input}
                            type="date"
                            name='birthday'
                            id='birthday'
                            required
                        />
                    </label>
                    <label className={styles.labelButton}>
                        <button type='submit' className={styles.btnRegister}>Register</button>
                    </label>
                </form>
            </div>
        </div>
    );
}

export default Register;
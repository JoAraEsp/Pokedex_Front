import React, { useEffect } from 'react'
import { Outlet, Link, Navigate } from 'react-router-dom'
import { useState, useRef, useContext } from "react"

import Swal from 'sweetalert2'

import styles from "../css/FormLogin.module.css"



function FormLogin() {

  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");

  const [bearerToken, setBearerToken] = useState()
  const [user, setUser] = useState();
  const [authorities, setAuthorities] = useState();

  const [data, setData] = useState();

  const login = (e) => {
    e.preventDefault();

    fetch('http://localhost:8080/user/login', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({
        'userName': email,
        'password': password
      })
    })
      .then(res => res.json())
      .then(data => {
        setBearerToken(data.token)
        setAuthorities(data.authorities)
        setData(data)
      })
      .catch(err => { UserIncorrect() })

  }


  const GetUser = () => {
    fetch(`http://localhost:8080/user/username/${data.userName}`)
      .then(res => res.json())
      .then(data => {
        setUser(data.data)
      })
  }

  const UserCorrect = () => {
    
    localStorage.setItem("user-token", JSON.stringify(bearerToken))
    localStorage.setItem("user-info", JSON.stringify(user))
    localStorage.setItem("user-authorities", JSON.stringify(authorities))

    window.location.reload(true);

    return (
      < Navigate to="/" replace={true} />
    )

  }

  const UserIncorrect = () => {
    Swal.fire({
      position: 'bottom',
      title: 'Usuario incorrecto',
      color: '#fff',
      width: '800px',
      background: '#D0342C',
      showConfirmButton: false,
      timer: 1500
    })
  }

  return (
    <div className={styles.loginContainer}>

      {data &&
        GetUser()}

        {user && UserCorrect()}

      <div className={styles.login}>

        <h2 className={styles.titleLogin}>Login</h2>

        <form className={styles.loginForm} onSubmit={login} >

          <label className={styles.label}>
            <span >E-mail</span>
            <input className={styles.input} type="userName" onChange={(e) => setEmail(e.target.value)} required />
          </label>

          <label className={styles.label}>
            <span>Password</span>
            <input className={styles.input} type="password" onChange={(e) => setPassword(e.target.value)} required />
          </label>

          <label className={styles.label}>
            <input type="submit" value="Iniciar sesion" />
          </label>

          <Link to="/register" className={styles.register}>
            ¿No tienes una cuenta?, puedes<span>registrarte</span>
          </Link>

        </form>

      </div>

    </div>
  )
}

export default FormLogin
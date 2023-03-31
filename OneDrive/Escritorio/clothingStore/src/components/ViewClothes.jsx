import styles from '../css/ViewClothes.module.css'
import { useContext, useState, useEffect } from 'react'
import { Link, useLocation, useNavigate, Navigate } from 'react-router-dom'
import { AiOutlineShoppingCart } from "react-icons/ai"

import Swal from 'sweetalert2'

import CarrouselClothes from "./CarrouselClothes";


function VistaLibro() {

    const [cloth, setCloth] = useState([]);

    const location = useLocation();

    const { nCloth } = location.state;

    const navigate = useNavigate();

    const [user, setUser] = useState(JSON.parse(localStorage.getItem("user-info")));
    const [bearerToken, setBearerToken] = useState(JSON.parse(localStorage.getItem("user-token")));


    const [quantity, setQuantity] = useState(1);

    function addQuantity() {
        if (quantity < 10) {
            setQuantity(quantity + 1)
        }
    }

    function removeQuantity() {
        if (quantity > 1) {
            setQuantity(quantity - 1)
        }
    }

    useEffect(() => {
        
        fetch('http://localhost:8080/cloth/' + nCloth)
            .then(response => response.json())
            .then(data => setCloth(data.data));
            window.scrollTo(0,0)
            setQuantity(1)

    }, [nCloth])



    const Car = (e) => {
        e.preventDefault();

        if (user == null) {
            navigate('/login')
        }
        else {

            fetch('http://localhost:8080/order', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'authorization': 'Bearer ' + bearerToken, 
                },
                body: JSON.stringify({
                    'clothId': nCloth,
                    'userId': user.id,
                    'quantity': quantity,
                    'status': 'SHOPPING'
                })
            })
                .then(res => res.json())
                .then(data => {
                })
                .catch(err => console.error(err))

            Swal.fire({
                position: 'center-end',
                title: 'Agregado al carrito',
                color: '#fff',
                width: '400px',
                background: '#008AD4',
                showConfirmButton: false,
                timer: 1500
            })

        }
    }

    const Shop = (e) => {
        e.preventDefault();

        fetch('http://localhost:8080/order', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'authorization': 'Bearer ' + bearerToken, 
            },
            body: JSON.stringify({
                'clothId': nCloth,
                'userId': user.id,
                'quantity': 1,
                'status': 'IN PROCESS'
            })
        })
            .then(res => res.json())
            .then(data => {
            })
            .catch(err => console.error(err))

    }

    return (
        <div className={styles.contenedorCuadro}>
            {
                nCloth == null && <Navigate to="/home" replace={true} />
            }
            {



                cloth ?

                    <div className={styles.cuadro}>

                        <img className={styles.imagen}
                            src={cloth.cover} />

                        <div className={styles.contenedorTexto}>
                            <div className={styles.fullName}>
                                <p className={styles.name}>{cloth.name}</p>
                            </div>
                            <p className={styles.price}>$ {cloth.price}</p>
                            <div className={styles.actions}>
                                <div className={styles.quantity}>
                                    <button onClick={removeQuantity}>-</button>
                                    <h3>{quantity}</h3>
                                    <button onClick={addQuantity}>+</button>
                                </div>
                                <Link to={'/buying'} state={{ cloth: cloth }} >

                                    <button className={styles.buy}>Comprar</button>
                                </Link>
                                <button onClick={Car} className={styles.addCart}><AiOutlineShoppingCart /></button>


                            </div>

                        </div>

                    </div>


                    :


                    <div className={styles.cuadro}>
                    </div>

            }

            {
                nCloth &&
                <CarrouselClothes
                    title={'Revisa lo que tenemos para tí'}
                    endpoint={'http://localhost:8080/cloth/'}
                />

            }
        </div>
    );
}

export default VistaLibro;
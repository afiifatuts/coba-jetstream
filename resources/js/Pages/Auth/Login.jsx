import { Link, useForm, usePage } from '@inertiajs/react'
import React, { useEffect } from 'react'
import { Input } from '../../Shared/Input'
import { ToastContainer, toast } from 'react-toastify'
import 'react-toastify/dist/ReactToastify.css';

const Login = () => {
    const { props } = usePage()
    const { flash } = props;

    const { post, data, errors, setData } = useForm({
        email: '',
        password: '',
    })

    const handleLogin = (e) => {
        e.preventDefault()
        post('/login', {
            preserveScroll: true,
            onError: (errors) => {
                console.log(errors)
            }
        })
    }

    useEffect(() => {
        if (flash.success) {
            toast.success(flash.success)
        }

        if (flash.error) {
            toast.error(flash.error)
        }
    }, [flash])

    return (
        <div className="container d-flex align-items-center justify-content-center" style={{ minHeight: '100vh' }}>
            <ToastContainer />
            <div className="d-flex flex-column justify-content-between">
                <div className="row justify-content-center">
                    <div className="col-lg-6 col-md-10">
                        <div className="mb-0 card card-default">
                            <div className="pb-0 card-header">
                                <div className="app-brand w-100 d-flex justify-content-center border-bottom-0">
                                    <a className="w-auto pl-0" href="/index.html">
                                        <span className="brand-name text-dark">Welcome !</span>
                                    </a>
                                </div>
                            </div>
                            <div className="px-5 pt-0 pb-5 card-body">

                                <h4 className="mb-6 text-center text-dark">Sign in</h4>
                                <form onSubmit={handleLogin}>
                                    <div className="row">
                                        <div className="mb-4 form-group col-md-12">
                                            <Input
                                                id="email"
                                                label="Email"
                                                type="email"
                                                isRequired
                                                placeholder="Email"
                                                error={errors.email}
                                                value={data.email}
                                                onChange={(e) => setData('email', e.target.value)}
                                            />
                                        </div>
                                        <div className="form-group col-md-12 ">
                                            <Input
                                                id="password"
                                                label="Password"
                                                type="password"
                                                isRequired
                                                placeholder="Password"
                                                error={errors.password}
                                                value={data.password}
                                                onChange={(e) => setData('password', e.target.value)}
                                            />
                                        </div>
                                        <div className="col-md-12">
                                            <div className="mb-3 d-flex justify-content-between">
                                                <Link
                                                    className="text-color" href="/auth/forgot-password">
                                                    Forgot password ?
                                                </Link>
                                            </div>
                                            <button type="submit" className="mb-4 btn btn-primary btn-pill">
                                                Sign In
                                            </button>
                                            <p>
                                                Don't have an account yet ?
                                                <Link className="text-blue" href="/auth/sign-up">Sign Up</Link>
                                            </p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    )
}

export default Login

import { Link, useForm, usePage } from '@inertiajs/react'
import React, { useEffect } from 'react'
import { ToastContainer, toast } from 'react-toastify'
import 'react-toastify/dist/ReactToastify.css';
import Input from '../../Shared/Input';

const Login = () => {
    const { props } = usePage()
    const { flash } = props;

    const { post, data, errors, setData } = useForm({
        email: '',
        password: '',
        remember: false,
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
        <div className="page page-center">
            <ToastContainer />
            <div className="container py-4 container-tight">
                <div className="mb-4 text-center">
                    <a href="." className="navbar-brand navbar-brand-autodark">
                        <img src="/assets/logo.svg" height="36" alt="" />
                    </a>
                </div>
                <div className="card card-md">
                    <div className="card-body">
                        <h2 className="mb-4 text-center h2">Login to your account</h2>
                        <form onSubmit={handleLogin}>
                            <div className="mb-3">
                                <Input
                                    label="Email"
                                    type="email"
                                    value={data.email}
                                    error={errors.email}
                                    onChange={(e) => setData('email', e.target.value)}
                                    placeholder="Your email"
                                    isRequired
                                />
                            </div>
                            <div className="mb-2">
                                <label className="form-label">
                                    Password
                                    <span className="form-label-description">
                                        <a href="./forgot-password.html">I forgot password</a>
                                    </span>
                                </label>
                                <div className="input-group input-group-flat">
                                    <input
                                        type="password"
                                        className={`form-control ${errors.password ? "is-invalid" : ""}`}
                                        placeholder="Your password"
                                        autocomplete="off"
                                        value={data.password}
                                        onChange={(e) => setData('password', e.target.value)}
                                    />
                                    <span className="input-group-text">
                                        <a href="#" className="link-secondary" title="Show password" data-bs-toggle="tooltip">
                                            <svg xmlns="http://www.w3.org/2000/svg" className="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
                                        </a>
                                    </span>
                                </div>
                            </div>
                            <div className="mb-2">
                                <label className="form-check">
                                    <input
                                        type="checkbox"
                                        className="form-check-input"
                                        checked={data.remember}
                                        onChange={(e) => setData('remember', e.target.checked)}
                                    />
                                    <span className="form-check-label">Remember me on this device</span>
                                </label>
                            </div>
                            <div className="form-footer">
                                <button type="submit" className="btn btn-primary w-100">
                                    Sign in
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div className="mt-3 text-center text-muted">
                    Don't have account yet? <a href="./sign-up.html" tabindex="-1">Sign up</a>
                </div>
            </div>
        </div>
    )
}

export default Login

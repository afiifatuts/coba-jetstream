import React from 'react'

export const Input = ({ id, label, onChange, error, value, placeholder, type = 'text', isRequired }) => {
    return (
        <>
            <label htmlFor={id}>{label}</label>
            <input
                id={id}
                className={`form-control input-lg ${error ? 'is-invalid' : ''}`}
                type={type}
                // required={isRequired}
                placeholder={placeholder}
                onChange={onChange}
                value={value}
            />
            <div className="mt-1 text-danger small">
                {error}
            </div>
        </>
    )
}

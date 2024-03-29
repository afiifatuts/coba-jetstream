import React from 'react'
import { DatePicker } from 'rsuite'

const InputDate = ({ label, onChange, error, value, placeholder, type = 'text', isRequired }) => {
    return (
        <>
            <label className={`form-label ${isRequired ? 'required' : ''}`}>{label}</label>
            <DatePicker
                oneTap
                value={value}
                className={`w-full ${error ? "is-invalid rs-picker-error" : ""}`}
                onChange={onChange}
                placeholder={placeholder}
            />
            <div className="invalid-feedback">
                {error}
            </div>
        </>
    )
}

export default InputDate

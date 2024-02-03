import React from 'react'
import Sidebar from './Sidebar'
import Header from './Header'

export const Layout = ({ children }) => {

    return (
        <div className="wrapper">
            <Sidebar />
            <div className="page-wrapper">
                <Header />
                <main>
                    {children}
                </main>

            </div>
        </div>
    )
}

import React from 'react'
import Sidebar from './Sidebar'
import Header from './Header'
import PageHeader from './PageHeader'

export const Layout = ({ children, left, right }) => {

    return (
        <div className="page">
            <div className="wrapper">
                <Sidebar />
                <Header />
                <div className="page-wrapper">
                    <PageHeader left={left} right={right} />
                    <div className="page-header d-print-none">
                        <div className="container-xl">
                            {children}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    )
}

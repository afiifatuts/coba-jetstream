import React from 'react'
import Sidebar from './Sidebar'
import Header from './Header'
import PageHeader from './PageHeader'
import "rsuite/dist/rsuite.min.css";

export const Layout = ({ children, left, right }) => {

    return (
        <div className="page">
            <div className="wrapper">
                <Sidebar />
                <Header />
                <div className="page-wrapper">
                    {left || right ? <PageHeader left={left} right={right} /> : null}
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

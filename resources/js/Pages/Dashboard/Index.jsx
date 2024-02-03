import React from 'react'
import Sidebar from '../../Shared/Sidebar'
import Header from '../../Shared/Header'
import { Layout } from '../../Shared/Layout'
import PageHeader from '../../Shared/PageHeader'
import Breadcrumb from '../../Shared/Breadcrumb'

const Index = ({ children }) => {
    return (
        <Layout left={<PageLeft />} right={<PageRight />}>
            <p>Dashbaord</p>
        </Layout>
    )
}

export default Index

const PageLeft = () => {
    return (
        <div className="btn-list" >
            <span className="d-none d-sm-inline">
                <a href="#" className="btn">
                    New view
                </a>
            </span>
            <a href="#" className="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report">
                <svg xmlns="http://www.w3.org/2000/svg" className="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                Create new report
            </a>
            <a href="#" className="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-report" aria-label="Create new report">
                <svg xmlns="http://www.w3.org/2000/svg" className="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
            </a>
        </div>
    )
}

const PageRight = () => {
    return (
        <Breadcrumb links={[
            { label: 'Dashboard', url: '/dashboard' },
            { label: 'Dashboard', active: true }
        ]} />

    )
}

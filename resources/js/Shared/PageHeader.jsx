import React from 'react'

const PageHeader = ({ left, right }) => {
    return (
        <div className="page-header d-print-none">
            <div className="container-xl">
                <div className="row g-2 align-items-center">
                    <div className="col">
                        {left}
                    </div>

                    <div className="col-auto ms-auto d-print-none">
                        {right}
                    </div>
                </div>
            </div>
        </div>
    )
}

export default PageHeader

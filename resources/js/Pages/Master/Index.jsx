
import { Layout } from '../../Shared/Layout'
import Breadcrumb from '../../Shared/Breadcrumb'
import Input from '../../Shared/Input'
import { Link, useForm, usePage } from '@inertiajs/react'

const Index = () => {
    const { data, errors, setData, post } = useForm({
        nik: '',
        full_name: '',
        place_of_birth: '',
        data_of_birth: '',
    })

    const handleSave = () => {

        console.log(data)
    }

    return (
        <Layout left={<PageLeft />} >
            <div className="card">
                <div className="card-body">
                    <form className='row row-cards'>
                        <div className="mb-3 col-sm-6 col-md-6">
                            <Input
                                label="ID Card Number"
                                placeholder="NIK"
                                isRequired
                                value={data.nik}
                                error={errors.nik}
                                onChange={(e) => setData('nik', e.target.value)}
                            />
                        </div>
                        <div className="mb-3 col-sm-6 col-md-6">
                            <Input
                                label="Full Name"
                                placeholder="Full Name"
                                isRequired
                                value={data.full_name}
                                error={errors.full_name}
                                onChange={(e) => setData('full_name', e.target.value)}
                            />
                        </div>
                        <div className="mb-3 col-sm-6 col-md-6">
                            <Input
                                label="Full Name"
                                placeholder="Full Name"
                                isRequired
                                value={data.full_name}
                                error={errors.full_name}
                                onChange={(e) => setData('full_name', e.target.value)}
                            />
                        </div>
                        <div className="mb-3 col-sm-6 col-md-6">
                            <Input
                                label="Full Name"
                                placeholder="Full Name"
                                isRequired
                                value={data.full_name}
                                error={errors.full_name}
                                onChange={(e) => setData('full_name', e.target.value)}
                            />
                        </div>
                        <div className="mb-3 col-sm-6 col-md-6">
                            <Input
                                label="Full Name"
                                placeholder="Full Name"
                                isRequired
                                value={data.full_name}
                                error={errors.full_name}
                                onChange={(e) => setData('full_name', e.target.value)}
                            />
                        </div>
                        <div className="mb-3 col-sm-6 col-md-6">
                            <Input
                                label="Full Name"
                                placeholder="Full Name"
                                isRequired
                                value={data.full_name}
                                error={errors.full_name}
                                onChange={(e) => setData('full_name', e.target.value)}
                            />
                        </div>
                        <div className="mb-3 col-sm-6 col-md-6">
                            <Input
                                label="Full Name"
                                placeholder="Full Name"
                                isRequired
                                value={data.full_name}
                                error={errors.full_name}
                                onChange={(e) => setData('full_name', e.target.value)}
                            />
                        </div>
                    </form>
                </div>
                <div className="card-footer text-end">
                    <div className="d-flex">
                        <button type='button' className="btn btn-link">Clear</button>
                        <button
                            type="button"
                            className="btn btn-primary ms-auto"
                            onClick={() => handleSave()}
                        >
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </Layout>
    )
}

export default Index

const PageLeft = () => {
    return (
        <Breadcrumb links={[
            { label: 'Masters', url: '/masters' },
            { label: 'BioData', active: true }
        ]} />

    )
}

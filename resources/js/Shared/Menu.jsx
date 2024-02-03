import { Link, usePage } from "@inertiajs/react";
import React from "react";
import MenuItem from "./MenuItem";
import {
    IconHome, IconUsers, IconDiscount, IconSettings, IconCards, IconFileInvoice
} from "@tabler/icons-react";
import { IconClockDollar } from "@tabler/icons-react";

const Menu = () => {
    const { url } = usePage()

    const isActive = (path) => {
        return url.startsWith(path) ? 'active' : '';
    }

    return (
        <ul className="navbar-nav pt-lg-3 ms-2">
            <MenuItem
                link="/dashboard"
                title="Home"
                icon={<IconHome />}
                isActive={isActive("/dashboard")}
            />
            <MenuItem
                link=""
                title="Masters"
                icon={<IconUsers />}
                isActive={isActive("/masters")}
                type="dropdown"
            >
                <Link className={`dropdown-item ${isActive("/masters") ? 'active' : ''} `} href="/masters">
                    BioData
                </Link>
                <Link className={`dropdown-item ${isActive("/masters") ? 'active' : ''} `} href="/tenants/users">
                    Activation
                </Link>
            </MenuItem>
        </ul>
    );
};

export default Menu;

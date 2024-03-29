import { Link } from "@inertiajs/react";

export default function MenuItem({
    title,
    icon,
    link,
    isActive,
    children,
    type = "link",
}) {
    if (type === "link")
        return (
            <li className={`nav-item ${isActive ? "active" : ""}`}>
                <Link href={link} className={`nav-link ${isActive ? "active" : ""}`}>
                    <span
                        className={`nav-link-icon d-md-none d-lg-inline-block ${isActive ? "active" : ""
                            }`}
                    >
                        {icon}
                    </span>
                    <span className="nav-link-title fw-bold">{title}</span>
                </Link>
                {children}
            </li>
        );

    return (
        <li className={`nav-item  ${isActive ? "active" : ""} `} key={Math.random()}>
            <button
                className={`nav-link dropdown-toggle ${isActive ? "active" : ""
                    }`}
                data-bs-toggle="dropdown"
                data-bs-auto-close="false"
                role="button"
                aria-expanded="true"
            >
                <span className="nav-link-icon d-md-none d-lg-inline-block ">
                    {icon}
                </span>
                <span className="nav-link-title fw-bold">{title}</span>
            </button>
            <div className="dropdown-menu">
                <div className="dropdown-menu-columns">
                    <div className="dropdown-menu-column">{children}</div>
                </div>
            </div>
        </li>
    );
}

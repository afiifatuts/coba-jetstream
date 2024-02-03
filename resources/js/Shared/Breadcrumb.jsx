
import { Link } from '@inertiajs/react'
const Breadcrumb = ({ links }) => {
    return (
        <ol className="breadcrumb breadcrumb-arrows" aria-label="breadcrumbs">
            {links.map((link, index) => {
                return (
                    <li
                        key={index}
                        className={`breadcrumb-item ${link.active ? "active" : ""}`}
                        aria-current="page"
                    >
                        {link.url ? (
                            <Link href={link.url}>{link.label}</Link>
                        ) : (
                            <span>{link.label}</span>
                        )}
                    </li>
                );
            })}
        </ol>
    );
};

export default Breadcrumb;

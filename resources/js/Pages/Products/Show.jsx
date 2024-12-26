import { Link } from '@inertiajs/react';
import { Card } from '@material-tailwind/react';

export default function Show({ product }) {
    return (
        <div className=" bg-gray-200 flex justify-center items-center min-h-screen rounded-2xl ">
            <Card className="w-full md:w-1/2 mx-auto shadow-lg transition-all hover:shadow-2xl hover:scale-105">
                <div className="p-6 max-w-3xl mx-auto">
                    <h1 className="mt-10 text-3xl font-bold text-center">{product.name}</h1>
                    <img
                        src={product.image}  // แสดงรูปภาพจากที่เก็บ
                        alt={product.name}
                        className="w-64 h-64 object-cover transition-all hover:scale-105 rounded-lg mt-4" // ปรับขนาดรูปเล็กลงที่นี่
                    />
                    <p className="mt-auto text-center">{product.description}</p>
                    <p className="mt-4 text-lg font-semibold text-center text-blue-500">Price: ${product.price}</p>
                    <div className="flex justify-center">
                    <button className="mt-4 inline-block text-white bg-blue-600 hover:bg-blue-800 px-4 py-2 rounded transition-colors duration-300">
                    <Link href="/products" className=" mt-auto inline-block hover:text-gray-100">
                        Back to All Products
                    </Link>
                    </button>
                    </div>
                </div>
            </Card>
        </div>
    );
}

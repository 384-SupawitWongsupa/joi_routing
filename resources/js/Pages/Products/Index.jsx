import { Link } from '@inertiajs/react';
import { FaEye } from 'react-icons/fa'; // Icon for "View Details"

export default function Index({ products }) {
    return (
        <div className="flex justify-center items-center min-h-screen bg-gray-50">
            <div className="p-6 w-full max-w-6xl">
                <h1 className="text-4xl font-extrabold mb-10 text-center text-gray-900">Product List</h1>
                <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    {products.map((product) => (
                        <div
                            key={product.id}
                            className="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all hover:scale-105 hover:shadow-2xl duration-300 hover:border-t-4 hover:border-blue-600"
                        >
                            <div className="relative">
                                <img
                                    src={product.image}
                                    alt={product.name}
                                    className="w-full h-48 object-cover rounded-t-xl transition-transform duration-300 ease-in-out transform hover:scale-110"
                                />
                                <div className="absolute top-4 right-4 p-2 bg-white bg-opacity-60 rounded-full transition-transform duration-300 hover:scale-125">
                                    <FaEye className="text-gray-800 text-xl" />
                                </div>
                            </div>
                            <div className="p-6">
                                <h2 className="text-2xl font-semibold text-gray-900 mb-2">{product.name}</h2>
                                <p className="text-gray-600 text-sm">{product.description}</p>
                                <div className="flex justify-between items-center mt-4">
                                    <p className="font-semibold text-lg text-gray-800">${product.price}</p>
                                    <Link
                                        href={`/show/${product.id}`}
                                        className="bg-blue-600 text-white hover:bg-blue-700 rounded-lg px-4 py-2 text-sm font-medium transition-colors duration-200"
                                    >
                                        View Details
                                    </Link>
                                </div>
                            </div>
                        </div>
                    ))}
                </div>
            </div>
        </div>
    );
}

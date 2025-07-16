import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
export default function listar({data}) {    
//   console.log(data);
//   const data = posts.data;
  console.log(data[0]);
  
    return (
        <AuthenticatedLayout
            header={
                <h2 className="text-xl font-semibold leading-tight text-gray-800">
                    Posts
                </h2>
            }
        >
            <Head title="Posts" />

            <div className="py-12">
                <div className="mx-auto max-w-7xl space-y-6 sm:px-6 lg:px-8">
                    <div className="relative overflow-x-auto shadow-md sm:rounded-lg w-[80%]">
                        <table className="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead className="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" className="px-6 py-3">Id</th>
                                    <th scope="col" className="px-6 py-3">User</th>
                                    <th scope="col" className="px-6 py-3">Title</th>
                                    <th scope="col" className="px-6 py-3">Body</th>
                                    <th scope="col" className="px-6 py-3">Edit</th>
                                    <th scope="col" className="px-6 py-3">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                {data.map(post => {                
                                    return <tr key={post.id} className="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                                                <th scope="row" className="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    {post.id}
                                                </th>
                                                <td className="px-6 py-4">
                                                    {post.user_id}
                                                </td>
                                                <td className="px-6 py-4">
                                                    {post.title}
                                                </td>
                                                <td className="px-6 py-4">
                                                    {post.body}
                                                </td>
                                                <td className="px-6 py-4">
                                                    <a href="#" className="font-medium text-blue-600 dark:text-blue-500 hover:underline">Update</a>
                                                </td>
                                                <td className="px-6 py-4">
                                                    <a href="#" className="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                                                </td>
                                            </tr>
                                })
                                }
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            

        </AuthenticatedLayout>
    );
}

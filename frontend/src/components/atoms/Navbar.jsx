import React from 'react'

const Navbar = () => {
  return (
    <div>
      <nav className="flex flex-col bg-navbar w-64 h-screen px-4 text-gray-900 fixed top-0 left-0 m-0 p-0 z-10">
        <div className="flex flex-col items-center mt-8">
          <span className="font-semibold text-white text-center text-xl mb-6">Hi! I'm Isla</span>
          <img
            src="https://randomuser.me/api/portraits/women/18.jpg"
            className="mx-auto w-60 h-50 rounded-full mb-6"
            alt="Avatar"
          />
          <span className="font-semibold text-white text-center text-xl">Full Stack Developer</span>
        </div>
        <div className="mt-10">
  <ul className="ml-4">
    <li className="px-12 py-2 text-gray-100 flex flex-row border-gray-300 hover:text-blue-500 hover:font-bold rounded rounded-lg">
      <a href="#" className="flex items-center hover:text-blue-500 hover:font-bold">
        <span className="mr-2">ABOUT ME</span>
      </a>
    </li>
    <li className="px-12 py-2 text-gray-100 flex flex-row border-gray-300 hover:text-blue-500 hover:font-bold rounded rounded-lg">
      <a href="#" className="flex items-center hover:text-blue-500 hover:font-bold">
        <span className="mr-2">PROJECTS</span>
      </a>
    </li>
    <li className="px-12 py-2 text-gray-100 flex flex-row border-gray-300 hover:text-blue-500 hover:font-bold rounded rounded-lg">
      <a href="#" className="flex items-center hover:text-blue-500 hover:font-bold">
        <span className="mr-2">EDUCATION</span>
      </a>
    </li>
    <li className="px-12 py-2 text-gray-100 flex flex-row border-gray-300 hover:text-blue-500 hover:font-bold rounded rounded-lg">
      <a href="#" className="flex items-center hover:text-blue-500 hover:font-bold">
        <span className="mr-2">SKILLS</span>
      </a>
    </li>
    <li className="px-12 py-2 text-gray-100 flex flex-row border-gray-300 hover:text-blue-500 hover:font-bold rounded rounded-lg">
      <a href="#" className="flex items-center hover:text-blue-500 hover:font-bold">
        <span className="mr-2">CONTACT</span>
      </a>
    </li>
  </ul>
</div>

      </nav>
    </div>
  )
}

export default Navbar

import React from 'react'
import ReactDOM from 'react-dom/client'

function App() {
    return (
        <div className="p-10">
            <h1 className="text-2xl font-bold text-blue-500">
                React + Laravel + Tailwind 🚀
            </h1>
        </div>
    )
}

ReactDOM.createRoot(document.getElementById('app')).render(<App />)
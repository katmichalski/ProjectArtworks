import React from 'react'
import ReactDOM from 'react-dom'
import App from './App.js'
import './index.css'
import './manifest.json'

ReactDOM.render(
  <App />,
  document.getElementById('root')
)
function HomePage () {
  return <div>Welcome to Next.js!</div>
}

export default HomePage

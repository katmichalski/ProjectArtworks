import React from 'react'
import ReactDOM from 'react-dom'
import App from './App.js'
import registerServiceWorker from 'registerServiceWorker'
import './index.css'

var element = React.createElement('h1', { className: 'greeting' }, 'Hello, world!')
ReactDOM.render(element, document.getElementById('root'))
registerServiceWorker()

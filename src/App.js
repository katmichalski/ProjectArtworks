import React, { Component } from 'react'
import './App.css'
import './App.js'
import 'index.css'
import './index.js'
import './todo.js'
import './.vscode/launch.json'
import './node_modules'
import './fonts'
import 'manifest.json'

class App extends { Component } {
  render () {
    return (
      <div className='App'>
        <div className='App-header'>
          <h2>Welcome!</h2>
        </div>,
        <p className='App-Intro'>
          to get started drag an item
        </p>
      </div>
    )
  }
}
export default App

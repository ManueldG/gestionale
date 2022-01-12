import React from 'react';
import ReactDOM from 'react-dom';

function Example() {
    return React.createElement('div', { className: 'container' }, React.createElement('div', { className: 'row justify-content-center' }, React.createElement('div', { className: 'col-md-8' }, React.createElement('div', { className: 'card' }, React.createElement('div', { className: 'card-header' }, 'Example React Component'), React.createElement('div', { className: 'card-body' }, 'I\'m an example component!')))));
}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(React.createElement(Example, null), document.getElementById('example'));
}
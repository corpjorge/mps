import React, { Component } from 'react';
import ReactDOM from 'react-dom';

class BuscadorMateria extends React.Component {

	constructor(props) {
		super(props);
    this.state = {
      value: '',
      materias: [],
      show: 'dropdown-menu-buscador',
      vacio: [{ id: '1', nombre: '...Vacío' },],
    };
    this.handleChange = this.handleChange.bind(this);
    this.addItem = this.addItem.bind(this);
	}

	handleChange (e) {

    $(".dropdown-item").fadeIn();
		$('.dropdown-menu-buscador').fadeIn();

    const value = e.target.value;
    this.setState({show: 'dropdown-menu-buscador show'});

    if (value != '') {
    fetch('/admin/buscar/materias/'+value)
      .then((response) => {
        return response.json()
      })
      .then(data => this.setState({ materias: data }));
    }
    else{
      this.setState({ materias: this.state.vacio })
    }
  };

  addItem(materiaID,e ) {
    e.preventDefault()

	$('.dropdown-item').fadeOut();
	$('.dropdown-menu-buscador').fadeOut();

   const newItem = document.getElementById("materia_"+materiaID);
	 let nombreGrupo = $("#materia_"+materiaID).parent().parent().parent().parent().attr('id');
	 nombreGrupo = "#input-"+nombreGrupo;

				$('#materiaAgregarEdit').val(newItem.text)
			  $('#id_materiaEditar').val(newItem.rel)

  }

	render() {
    const { materias } = this.state;

		return (
        <div>
					<div className="form-inline">
					  <div className="form-group mb-2">
					    <input type="search" className="form-control" placeholder="Ingrese el código" value={this.state.name} onChange={this.handleChange}/>
							<div className={this.state.show} >
               {materias.map(materia =>
                <a id={"materia_"+materia.id} rel={materia.id} key={materia.id} href={materia.codigo} className="dropdown-item" onClick={this.addItem.bind(this,materia.id)}>{materia.nombre}</a>
                )}
              </div>
						</div>
					  <div className="form-group mx-sm-3 mb-2">
							<input type="text" className="form-control" id="materiaAgregarEdit" placeholder="Nombre Materia" readOnly/>
					    <input type="hidden" id="id_materiaEditar" className="id_materiaEditar" name="id_materiaEditar"/>
					  </div>
					</div>
        </div>
		);
	}

};

ReactDOM.render(<BuscadorMateria />, document.getElementById('editarGrupoMateria'))

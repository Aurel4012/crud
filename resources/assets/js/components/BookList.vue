<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
              <div v-if="error" class="alert alert-danger">
              erreur de traitements
              </div>
              <div v-show="!books">
              chargement des données...
              </div>
                <div class="card card-default">
                    <div class="card-header">Test Component</div>

                    <div class="card-body">
                    
                      List de livre
                      <table class="table">
                        <thead>
                          <tr>
                          <th scope="col">id</th>
                               <th scope="col">Titre</th>
                               <th scope="col">Resumé</th>
                               <th scope="col">Type</th>
                           </tr>
                        </thead>
                          <tbody>

                            
                              
                      <tr v-for="book in books">
                      <td>{{book.author_id}}</td>
                      <td>{{book.title}}</td>
                      <td>{{book.resume}}</td>
                      <td>{{book.type.name}}</td>
                      </tr>
                      </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {//declaration des variables
             books: null,
             error: null
            }
    },
      mounted () {
        axios
          .get('http://localhost:8000/api/books')
          .then(response => (this.books = response.data))
          .catch(error => {
                  console.log(error)
                  this.error = error
                  this.errored = true
                })
      }
    }
</script>

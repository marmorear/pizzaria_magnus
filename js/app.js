Vue.use(VueMask.VueMaskPlugin);
new Vue({
  el: "#app",
  data() {
    return {
      email: "",
      senha: "",
      nome_cadastro: "",
      endereco: "",
      cep: "",
      cpf: "",
      celular: "",
      dados_usuario: [],
    };
  },
  methods: {
    async salva_dados() {
      var json = {
        nome: this.nome_cadastro,
        email: this.email,
        celular: this.celular,
        senha: this.senha,
        cpf:this.cpf,
      };

      var json_cadastro =JSON.stringify(json)
      
      $cookies.set("cadastro_banco",json_cadastro) 
      
    },
    object(object) {
      var formData = new FormData();
      formData.append("data", JSON.stringify(object));
      return formData;
    },
  },
  mounted: function () {
    
  },
});

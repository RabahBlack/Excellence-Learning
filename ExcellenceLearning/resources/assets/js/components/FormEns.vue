<template>
<Form ref="Enseignant" :model="Enseignant"  :label-width="80">
    <FormItem label="Nom">
        <Input v-model="Enseignant.nomEns" placeholder="Nom"></Input>
    </FormItem>
    <FormItem label="Prénom">
        <Input v-model="Enseignant.prenomEns" placeholder="Prénom"></Input>
    </FormItem>
    <FormItem label="Email">
        <Input v-model="Enseignant.emailEns" placeholder="Email"></Input>
    </FormItem>
    <FormItem label="Téléphone">
        <Input v-model="Enseignant.telEns" placeholder="Téléphone"></Input>
    </FormItem>
    <FormItem label="Adresse">
        <Input v-model="Enseignant.addressEns" placeholder="Adresse"></Input>
    </FormItem>
    <FormItem label="Profession">
        <Input v-model="Enseignant.profession" placeholder="Profession"></Input>
    </FormItem>
    <FormItem>
        <Button type="primary" @click="handleSubmit('Enseignant')">Submit</Button>
        <Button @click="handleReset('Enseignant')" style="margin-left: 8px">Reset</Button>
     
    </FormItem>
     <div v-if="done">
          <Alert type="success" show-icon >An info prompt</Alert>
      </div>
</Form>
</template>

<script>
export default {
    name: 'form-ens',
    data() {

        return {
            done:false,
            Enseignant: {
                emailEns: '',
                nomEns: '',
                prenomEns: '',
                telEns: '',
                addressEns: '',
                profession: '',
            }
        }
    },
    methods: {
        handleSubmit(name) {
            console.log(this.Enseignant)
           this.axios
                .post("api/enseignants", this.Enseignant)
                .then(response => {
                   this.generer_fake_ens();
                   this.done=true;
                 setTimeout(()=>{this.done=false},5000)
                })
                .catch(err => {
                    console.log(err.response);
                });
        },
    generer_fake_ens() {
 let domains = ["gmail.com", "hotmail.fr", "yahoo.fr", "yahoo.com"];
           let fake_num =
        [
          (Math.round(Math.random() * 2) + 5) * 10 +
            Math.round(Math.random() * 2) +
            5
        ] *
          10000000 +
        Math.round(Math.random() * 10000000);
        this.Enseignant.nomEns = this.$faker().name.lastName();

        this.Enseignant.prenomEns = this.$faker().name.firstName();
        this.Enseignant.addressEns=this.$faker().address.city();
        this.Enseignant.emailEns=this.Enseignant.emailEns =
        this.Enseignant.nomEns.toLowerCase().replace(" ", ".") +
        "@" +
        domains[Math.round(Math.random() * 4)];
        this.Enseignant.telEns= "0" + fake_num;
        this.Enseignant.profession="AAAAAA"
    }
        ,
        handleReset(name) {
            this.$refs[name].resetFields();
        }
    },
    mounted(){
        this.generer_fake_ens();
    }
}
</script>

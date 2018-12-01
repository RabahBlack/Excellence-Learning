<template>
<Table border :columns="columns7" :data="enseignants">
</Table>
</template>

<script>
export default {
    name: 'list-ens',
    data() {

        return {
            columns7: [{
                    title: 'Nom',
                    key: 'nomEns',
                },

                {
                    title: 'Prénom',
                    key: 'prenomEns'
                },
                {
                    title: 'Email',
                    key: 'emailEns',
                    width: 150
                },
                {
                    title: 'Téléphone',
                    key: 'telEns'
                },
                {
                    title: 'Adresse',
                    key: 'addressEns'
                },
                {
                    title: 'Profession',
                    key: 'profession'
                },

                {
                    title: 'Action',
                    key: 'action',
                    width: 150,
                    align: 'center',
                    render: (h, params) => {
                        return h('div', [
                            h('Button', {
                                props: {
                                    type: 'primary',
                                    size: 'small'
                                },
                                style: {
                                    marginRight: '5px'
                                },
                                on: {
                                    click: () => {
                                        this.show(params.index)
                                    }
                                }
                            }, 'View'),
                            h('Button', {
                                props: {
                                    type: 'error',
                                    size: 'small'
                                },
                                on: {
                                    click: () => {
                                        this.remove(params.index)
                                    }
                                }
                            }, 'Delete')
                        ]);
                    }
                }
            ],
            enseignants: [

            ]
        }
    },
    methods: {
        show(index) {
            this.$Modal.info({
                title: 'Enseignat',
                content: `Nome：${this.enseignants[index].nomEns}<br>Prénom：${this.enseignants[index].prenomEns}<br>Adresse：${this.enseignants[index].addressEns}`
            })
        },
        remove(index) {
            this.enseignants.splice(index, 1);
            this.axios.defaults.headers.common = {
                'X-CSRF-TOKEN': window.Laravel.csrfToken,
                'X-Requested-With': 'XMLHttpRequest'
            };
            let selectedenseignant = this.enseignants[index];
       
            this.axios.delete('api/enseignants/' + selectedenseignant.emailEns, selectedenseignant).then((response) => {

                console.log("enseignant supprimé avec succés ");
            }).catch((err) => {
                console.log(err)
            });
        }
    },
    mounted() {
        this.axios
            .get("api/enseignants")
            .then(response => {
                console.log(response.data);
                this.enseignants = response.data;
            })
            .catch(err => {
                console.log(err.response);
            });
    }
}
</script>

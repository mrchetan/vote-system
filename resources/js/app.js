import Vue from 'vue'
import PropositionOptionEditor from './admin/PropositionOptionEditor'
import TokenInput from './voter/TokenInput'
import TokenCard from './admin/TokenCard'

new Vue({
    el: '#app',
    components: {
        PropositionOptionEditor,
        TokenInput,
        TokenCard,
    },
})

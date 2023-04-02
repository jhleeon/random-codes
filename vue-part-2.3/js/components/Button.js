export default {
    template: `<button 
        :class="
        {'btn-lg':true,
        'btn btn-primary':propsvalue === 'primary',
        'btn btn-success':propsvalue === 'success',
        'btn btn-danger':propsvalue === 'danger',
        'is-loading':processing,
    }"
    > <slot/> </button>`,

    props: {
        propsvalue: {
            type: String,
            default: 'primary'
        },
        processing: {
            type: Boolean,
            default: false
        }
    }
}
import Assignment from "./Assignment.js";
export default {
    components: { Assignment },

    template:`
    <section>
        <h2 v-show="assignments.length" >{{ title }}</h2>
        <ul>
            <assignment 
                v-for="assignment in assignments" 
                :key="assignment.id" 
                :assignment="assignment" 
            >
            </assignment>
        </ul >
    </section >
    `,

    props: {
        assignments: Array,
        title: String
    }
}
import AssignmentList from "./AssignmentList.js";

export default {
    components: { AssignmentList },
    template:`
    <section>
        <assignment-list :assignments= "filter.inpogress" title="Assignment List" ></assignment-list>  
        <assignment-list :assignments= "filter.completed" title="Assignment Completed" ></assignment-list>
    </section>    
    `,

    data() {
        return {
            assignments: [
                { name: "Biology", complete: false, id: 1 },
                { name: "Math", complete: false, id: 2 },
                { name: "Physics", complete: false, id: 3 },
            ],
        };
    },

    computed: {
        filter(){
            return{
                inpogress: this.assignments.filter((a) => !a.complete),
                completed: this.assignments.filter((a) => a.complete)
            }
        }
    },
}
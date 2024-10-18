import { toast } from "vue3-toastify";
import "vue3-toastify/dist/index.css";

export default function useNotify() {
    // Function to display success notification
    const toastifySuccess = (message) => {
        toast.success(message, { autoClose: 2000 });
    };

    // Function to display error notification
    const toastifyError = (message) => {
        toast.error(message, { autoClose: 2000 });
    };

    return {
        toastifySuccess,
        toastifyError,
    };
}
import './bootstrap';
// import '../css/app.css';
import '@fortawesome/fontawesome-free/css/all.css'
import {
    Collapse
} from "tw-elements";
window.ts = {}
window.ts.Collapse = Collapse
import { ElMessage } from 'element-plus'
window.ElMessage = ElMessage
import.meta.glob([
    '../images/**',
    '../fonts/**',
]);

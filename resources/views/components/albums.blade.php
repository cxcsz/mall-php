@php
    $deliverVal = '';
    if (isset($deliverId)) {
        $deliverVal = $deliverId;
    } else {
        $deliverVal = $field.'-albums-deliver';
    }
    $deliverVal .= ',';
    if (isset($boxId)) {
        $deliverVal .= $boxId;
    } else {
        $deliverVal .= $field.'-albums-box';
    }
//        data-mall-albums-deliver="{{$id}}"
//        data-mall-albums-deliver="{{$field}}-deliver"
@endphp
<div class="flex items-start h-full">
    <!--Tabs navigation-->
    <ul class="mr-2 w-[68px] flex list-none flex-col flex-wrap pl-0"
        role="tablist"
        data-te-nav-ref>
        <li role="presentation" class="flex-grow text-center">
            <a href="#tabs-{{$field}}-upload"
                class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400"
                data-te-toggle="pill"
                data-te-target="#tabs-{{$field}}-upload"
                data-te-nav-active
                role="tab"
                aria-controls="tabs-{{$field}}-upload"
                aria-selected="true"
            >
                上传图片
            </a>
        </li>
        <li role="presentation" class="flex-grow text-center">
            <a
                href="#tabs-{{$field}}-show"
                class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400"
                data-te-toggle="pill"
                data-te-target="#tabs-{{$field}}-show"
                role="tab"
                aria-controls="tabs-{{$field}}-show"
                aria-selected="false"
            >全部图片</a
            >
        </li>
    </ul>

    <!--Tabs content-->
    <div class="py-2 h-full flex-grow pr-2">
        <div
            class="hidden flex-col content-center h-full opacity-0 opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:flex"
            id="tabs-{{$field}}-upload"
            role="tabpanel"
            aria-labelledby="tabs-home-tab03"
            data-te-tab-active>
            <div class="basis-4/5 relative bg-slate-100 border border-dotted"
                 data-mall-albums-upload
            >
                <input type="file" accept="image/*" multiple hidden>
                <i class="fas fa-plus text-7xl text-slate-300 absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2"></i>
                <div class="preview m-2 h-full flex flex-wrap content-start"
                     data-mall-albums-preview
                ></div>
            </div>
            <div class="basis-1/5 flex justify-between items-center">
                <button class="py-3 px-6 bg-primary text-xs font-medium uppercase leading-normal text-white rounded transition duration-150 ease-in-out hover:bg-primary-600  focus:bg-primary-600  focus:outline-none focus:ring-0 active:bg-primary-700"
                        data-te-ripple-init
                        data-te-ripple-color="light"
                        data-mall-albums-clear>
                    清空
                </button>
                <button class="py-3 px-6 bg-primary text-xs font-medium uppercase leading-normal text-white rounded transition duration-150 ease-in-out hover:bg-primary-600  focus:bg-primary-600  focus:outline-none focus:ring-0 active:bg-primary-700"
                        data-te-ripple-init
                        data-te-ripple-color="light"
                        data-mall-albums-deliver="{{$deliverVal}}"
                >
                    提交并传值
                </button>
                <button class="py-3 px-6 bg-primary text-xs font-medium uppercase leading-normal text-white rounded transition duration-150 ease-in-out hover:bg-primary-600  focus:bg-primary-600  focus:outline-none focus:ring-0 active:bg-primary-700"
                        data-te-ripple-init
                        data-te-ripple-color="light"
                        data-mall-albums-submit>
                    提交
                </button>
            </div>
        </div>
        <div
            class="hidden flex-col content-center h-full opacity-0  opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
            id="tabs-{{$field}}-show"
            role="tabpanel"
            aria-labelledby="tabs-profile-tab03">
            <div class="h-4/5 relative bg-slate-100 border border-dotted">
                <div class="m-2 h-full flex flex-wrap content-start overflow-y-auto" data-mall-albums-list></div>
            </div>
            <div class="h-1/5 flex justify-between items-center">
                <button class="py-3 px-6 bg-primary text-xs font-medium uppercase leading-normal text-white rounded transition duration-150 ease-in-out hover:bg-primary-600  focus:bg-primary-600  focus:outline-none focus:ring-0 active:bg-primary-700"
                        data-te-ripple-init
                        data-te-ripple-color="light"
                        data-mall-albums-deliver="{{$deliverVal}}"
                        >
                    传值
                </button>
                <button class="py-3 px-6 bg-primary text-xs font-medium uppercase leading-normal text-white rounded transition duration-150 ease-in-out hover:bg-primary-600  focus:bg-primary-600  focus:outline-none focus:ring-0 active:bg-primary-700"
                        data-te-ripple-init
                        data-te-ripple-color="light"
                        data-mall-albums-next>
                     下一页
                </button>
            </div>
        </div>
    </div>
</div>
@pushOnce('scripts')
<script>
    window.onload = () => {
    // (function (){
        // 上传功能
        let uploads = document.querySelectorAll("[data-mall-albums-upload]");
        // 上传事件设置
        uploads.forEach(function (upload) {

            // 设置拖拽事件
            upload.addEventListener('dragenter', function(e){  //拖进
                e.preventDefault();
            })
            upload.addEventListener('dragover', function(e){  //拖来拖去
                e.preventDefault();
            })

            // 隐藏的文件上传
            upload.customFile = upload.querySelector('input[type=file]')
            // 预览的方法
            upload.customPreview = upload.querySelector('[data-mall-albums-preview]')

            upload.albumsClick = function() {
                let evt = document.createEvent("mouseEvents");
                evt.initMouseEvent("click", false, false);
                this.customFile.dispatchEvent(evt);
            }

            upload.albumsDrop = function(event) {
                event.preventDefault();
                this.customFile.files = event.dataTransfer.files
                this.albumsPreview()
            }

            upload.albumsPreview = function() {
                files = Array.from(this.customFile.files)
                let html = '';
                files.map(function (file, index) {
                    let windowURL = window.URL || window.webkitURL
                    let src = windowURL.createObjectURL(file)
                    html += `<label class="relative w-1/4 pl-2 pt-2 h-1/3" for="box-${index}">
                        <img src="${src}" class="object-contain w-full h-full" />
                        <input
                            class="absolute top-0 right-0 h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ml-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ml-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent dark:border-neutral-600 dark:checked:border-primary dark:checked:bg-primary"
                            type="checkbox"
                            id="box-${index}"
                            name="picture"
                            value="${index}"
                            aria-label="..."
                            checked />
                    </label>`
                })
                this.customPreview.innerHTML = html
                this.removeEventListener('click', this.albumsClick)
                this.removeEventListener('drop', this.albumsDrop)
            }


            upload.albumsClear = function() {
                this.customPreview.innerHTML = '';
                this.addEventListener('click', this.albumsClick)
                this.addEventListener('drop', this.albumsDrop)
            }

            upload.albumsSubmit = function(deliver = null) {
                let files = new Array();
                Array.from(this.customPreview.querySelectorAll('input[name=picture]')).map((value) => {
                    if (value.checked) {
                        files.push(this.customFile.files.item(value.value))
                    }
                })
                if (!files.length) {
                    ElMessage.error('请选择要提交的文件');
                    return;
                }
                let formData = new FormData();
                files.map(function (file) {
                    formData.append('pictures[]', file)
                })
                axios.post('/admin/image/upload', formData).then(response => {
                    if (deliver !== null) {
                        console.log(deliver)
                        let val = response.data.data.join(',')
                        let [deliverId, boxId] = deliver.getAttribute('data-mall-albums-deliver').split(',')
                        document.getElementById(deliverId).value = val
                        let myCollapse = new ts.Collapse(document.getElementById(boxId))
                        myCollapse.hide();
                    }
                    this.albumsClear()
                    ElMessage({
                        message: response.data.message,
                        type: 'success',
                    })
                }).catch(response => {
                    console.log(response)
                    response = response.response
                    let message = '接口调用失败';
                    if (response.data.message) {
                        message = response.data.message;
                    }
                    ElMessage.error(message)
                })
            }

            upload.customFile.addEventListener('change', upload.albumsPreview.bind(upload))

            // 获取相关的操作方法
            submitNode = upload.parentNode.querySelector('[data-mall-albums-submit]')
            clearNode = upload.parentNode.querySelector('[data-mall-albums-clear]')
            deliverNode = upload.parentNode.querySelector('[data-mall-albums-deliver]')
            submitNode.addEventListener('click', upload.albumsSubmit.bind(upload, null)) // 参数一绑定 null, 方式 event 自动注入
            clearNode.addEventListener('click', upload.albumsClear.bind(upload))
            deliverNode.addEventListener('click', upload.albumsSubmit.bind(upload, deliverNode))

            // 设置放入事件
            upload.addEventListener('drop', upload.albumsDrop)

            // 设置点击事件
            upload.addEventListener('click', upload.albumsClick)
        })

        let showList = document.querySelectorAll('[data-mall-albums-list]');
        showList.forEach(function (show) {
            let albums = Array();
            show.albumsList = function (show) {
                let page = this.getAttribute('data-mall-albums-next')??0;
                axios.get('/admin/image/index?page='+page).then(response => {
                    let html = '';
                    let data = response.data.data
                    if (!data.length) {
                        ElMessage({
                            message: '没有更多的数据了',
                            type: 'success',
                        })
                        return;
                    }
                    data.forEach(function (item) {
                        html += `<label class="relative block w-1/4 pl-2 pt-2 h-1/3" for="box-${item['id']}">
                        <img src="${item['path']}" class="object-contain w-full h-full" />
                        <input
                            class="absolute top-0 right-0 h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ml-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ml-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent dark:border-neutral-600 dark:checked:border-primary dark:checked:bg-primary"
                            type="checkbox"
                            id="box-${item['id']}"
                            name="picture"
                            value="${item['path']}"
                            />
                    </label>`
                    })
                    show.innerHTML += html;
                    this.setAttribute('data-mall-albums-next', ++page)
                }).catch(response => {
                    response = response.response
                    let message = '接口调用失败';
                    if (response.data.message) {
                        message = response.data.message;
                    }
                    ElMessage.error(message)
                })
            }
            let next = show.parentNode.parentNode.querySelector('[data-mall-albums-next]')
            next.addEventListener('click', show.albumsList.bind(next, show))



            show.albumsDeliver = function (show, next) {
                let files = new Array();
                Array.from(show.querySelectorAll('input[name=picture]')).map((value) => {
                    if (value.checked) {
                        files.push(value.value)
                    }
                })
                let val = files.join(',')
                let [deliverId, boxId] = this.getAttribute('data-mall-albums-deliver').split(',')
                document.getElementById(deliverId).value = val
                let myCollapse = new ts.Collapse(document.getElementById(boxId))
                myCollapse.hide();
                // 清空原来的数据
                show.innerHTML = '';
                next.setAttribute('data-mall-albums-next', 0)
            }
            let deliver = show.parentNode.parentNode.querySelector('[data-mall-albums-deliver]')
            deliver.addEventListener('click', show.albumsDeliver.bind(deliver, show, next))
        })
    // }())
    }
</script>
@endPushOnce

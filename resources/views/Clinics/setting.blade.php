@extends('Clinics.partials.main')

@section('content')
    <div class="mt-5 container-fluid">
        <div class="row d-flex  gx-2 justify-content-center position-relative">
            <div class="container col-sm-8 col-md-8 col-lg-8 col-11 mb-5 ml-5 settings-sm rounded-3">
                <h5 class=" py-3 px-3 bg-white  m-0">Settings.</h5>
                <ul class="nav nav-tabs bg-white  d-flex  justify-content-start align-items-center" id="ex-with-icons"
                    role="tablist">
                    <li class="nav-item" role="presentation">
                        <a data-bs-toggle="tab" class="nav-link active " id="ex-with-icons-tab-1"
                            href="#ex-with-icons-tabs-1" role="tab" aria-controls="ex-with-icons-tabs-1"
                            aria-selected="true">
                            Clinic
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a data-bs-toggle="tab" class="nav-link " id="ex-with-icons-tab-2" href="#ex-with-icons-tabs-2"
                            role="tab" aria-controls="ex-with-icons-tabs-2" aria-selected="false">
                            Users
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a data-bs-toggle="tab" class="nav-link" id="ex-with-icons-tab-3" href="#ex-with-icons-tabs-3"
                            role="tab" aria-controls="ex-with-icons-tabs-3" aria-selected="false">
                            Calendar
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a data-bs-toggle="tab" class="nav-link" id="ex-with-icons-tab-5" href="#ex-with-icons-tabs-5"
                            role="tab" aria-controls="ex-with-icons-tabs-5" aria-selected="false">
                            Inventory & Suppliers
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a data-bs-toggle="tab" class="nav-link" id="ex-with-icons-tab-6" href="#ex-with-icons-tabs-6"
                            role="tab" aria-controls="ex-with-icons-tabs-6" aria-selected="false">
                            Documents
                        </a>
                    </li>
                    <li class="nav-item" role="presentation"> <a data-bs-toggle="tab" class="nav-link"
                            id="ex-with-icons-tab-7" href="#ex-with-icons-tabs-7" role="tab"
                            aria-controls="ex-with-icons-tabs-7" aria-selected="false">
                            Notifications et reminders
                        </a>
                    </li>
                </ul>
                <div class="tab-content" id="ex-with-icons-content">
                    <div class="tab-pane fade show active" id="ex-with-icons-tabs-1" role="tabpanel"
                        aria-labelledby="ex-with-icons-tab-1 ">
                        <div class="container-fluid bg-white">
                            <div class="row align-items-center d-flex justify-content-between">
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="row  justify-content-center align-items-center">
                                        <div class="col-md-6 col-lg-6 text-center">
                                            <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAJQAsQMBEQACEQEDEQH/xAAbAAABBQEBAAAAAAAAAAAAAAAAAQQFBgcDAv/EAEcQAAEDAgQCBgYFCAgHAAAAAAECAwQAEQUGEiExQQdRYXGBkRMUIqGxwTJCUmLhFSMkQ3Ki0fElM1OCkrLC8BYXc3SEk9L/xAAaAQEAAgMBAAAAAAAAAAAAAAAABAUBAgMG/8QAMhEAAgIBAwIFAwIEBwAAAAAAAAECAxEEITESQQUiMlFhEyNxBsEzgZGxFCRCodHh8P/aAAwDAQACEQMRAD8A3GgCgEoBaAKASgCgAm1AcpEliK0p6S82y0ndS3FhKR4mgyVif0lZPglQcx2K6pOxTHJc/wAtxQEUrpgysr+oGIP/ALENdZ6X7GHJLuH/ADfyykgPt4kyOtcNVOl+xjqj7khA6UMmzbBONNMqPKQlTfxFYNi0wp8OewH4MpiS0eC2XAsHxFAdwb8KAWgFoAoAoAoAoAoAoAoBKAWgCgCgEJtQEPmTM+EZZies4xLQwk/Qb4rcPUlI3NAZziGfc04+tScAhN4Nh6thKmJ1Pr7Up4J8j31Jr0tk/gi26uuvblkGvLTU9/1jHp03FpAN7yXToSexI2FTIaOtercgWa+yXp2JKLhsCGLRobDYHDS2BUiNcFwiJK6cuZMcl1KBYuJHeqtspGqUn2FQ4lW6Vg9xvRPPBjDXJwkQoklJEiKy5fjrbBvWHCL5RvGyS4ZEqytBZf8AWsKdk4XKHB2E6UeY4W7Kjz0dcuNiTDXWx53JeDnDOOXyPXm2swQE/SKU+jkpHWLbK7rb9lQ7NJOHG5Oq1tc9pbM0LKudcEzQgjDpITKSLuRHvZeR3pPEdoqKTM5LEDQyLQBQBQBQBQCUAtAIKAWgCgEPDagM+zv0gmBKVgeWWkT8at+cUf6qL2rPX2fyreEJTeImllka45kylwcD0zDieMSHMTxVf0pD++jsSOAFWlOljXu92U9+snZtHZEvUkhnOTIaisqefVpQPMk7ADtJrWc1BdTN4QlZJRjychHlStK3G5KWz+qQ0BbvKlJJ8rd9VNurnN+XZF5RoK61mW7OwgoAKVRJiwfqBDKNuq4IPvqI3knJJLCPT+GtSwyBhqYwbUCF3SFBI4gaCeI7aym1wHFS5Q1kR5UKXaI+ZTJSVKYcN1N2+91d96lVaycPVuiFd4fXZ6NmdYcpqYwl5knSdiFCxSeoirWFkbI9USjtqlVLpkjua3OZFYrgUae8mW0tcPEGzqamMHStJ7esVwt08LPySaNVOrblFjyf0hS4UtnBM66G3l+zFxMCzcjqCuSVVVW1SreJFzTdC2OYmnpNxeuZ1FoAoAoAoAoAoBKAUUAl6AzjpGzlKalDLGWXB+VnU3lSOKYbfX+0f98q3rrdksI522xrj1SK1g2ExcIjeijAlajqddWbrdVzKjVxVUqo4RQ3XStlmQ/rqcgoCNnNJmPuMuIUpDaU6faIus3IAI5iwUSOAFVmun51D2Lnw2pdDn3ewzw6Y242Do1kbKAQm9wbEgHSSO3UagFolnglW34y9h6En7K3XWD76GR2lltab/k5T4+6+lY/eIrAO7ZebbUmPBRHHMuKSAO2yb38xQEJG0t4sttheuOW7a+S1g3JHYL/AC5VP0E2puJV+KQThGftsSNWhSi0A2xCBGxKI5FmtBxlY3B4g9YPI1pOEZrpkb12SrfVEf5BzXKwPEGcr5kkF1h32cMnr+sB+rWevqPhVRdVKuWGXtF6ujlGr1xO4tAFAFAFAFAJQCigKr0iZpGVsCU8wn0uIyV+hhM2vqcPM9g4+7nWUsvCMN4WWZvgGFqw6O45KcL+IyVelmSFG5cWdzv1CriilVQ+WUWpvds/hEpXcjBQCUBGyX0NLxFJKgvSFaidkNlCQSPvEi3v5VT63+KX/hz+x/NnZOBLcweHKjsp1qaSpaNRSb23II4K7efPrqqV+JPPBfvTKUF08jHW80oNlYUo/q5HsL8wLHwHjUlNPgiyjKDw0etR1b4e4VD62ls+W96yaNfB5cfVcao7TVjsqSU38AL/ABFDGF7CwDrxNokrWQ0o61eyLbbJT8/9iboV9x/grfFJfaS+Saq2KEKAKAYY1hcfF4C4sgWJ3bcA3bVyUO6udtasj0s603SqmpIuXRZmiRi8B7CMYV/TOFkNvKP69H1XB135/jVLOLhLpZfwmpxUl3L3WpuFAFAFAFAJQBe1AYhiOIKzXnibiqjqw/DFGJATyKx9NfifdbqqdoqsvrZX6+7pj9NdySqyKgKAKAKAgsc1IkrKd1FjWEE2SCm9lKPUL+6qrXrzqXwXnhcs1SgWr8pPohss4PHakoaQEqecWoIuBY20pN++9UqolN5Zey1MYbCR5UOa2WsWjtQ3SdkrV+bd7UFQAPaLX+NaTplDdHevVKawxpiUHB4yAmHCjSpCvostpTZI+0qwOlPbb8Nq1bPuzWy2mC9KyRmIwXUYWpasJioUghaXIjStgCL7WHK+9xXeNc4y5OE9RXODWEvwNcALT0h95ssmyEj82ANRO55knbT51caCPMjz/is08R/mTlWJUBQBQCUBC4pKdy5jeH5php3jLDU1A/Wx1HfxHLw6qga2rK+oix0F2H9Nm6sPIkMoeaUFtuJCkqHMHcVXFsdKAKAKAKASgKv0l40vAMmYjMYv6ytAYYAO5cWdIPhcnwoGZ1gGHpwvB4sNO5Qi7h+0o7q95q7ph0VqJ56+x2WNkhXU4hQBQB42oBlIgtSoMRmdFYehyX2depA1XU4m51cfu26iBy38vfY3fN98s9npaEtJBrjb/cnI2HJcwViEhZb9XZMcAbhJT7N7dYttUiuflTIdkN2snKfhEeXAj4NMJkpdU2Xb8VJbsSo8TvYAnrUK1vs6Y5Ommq6pdPY5YXhEHDJk6PAYbiMyFhbYQNipKbKHhcGwtxPUa56ezK3N9TXiW2yJCFCThcE+lkLcDbR9I4vbVbcqVc8akzllEaMel5yU6DBXDw91bbLbaG5C1gJA1a73JJt1+zbqHbtEqsxfHD7os9RRjRzTxsn/AFwTnDYcK9QeGChkKAKA4y47cyK9GeF23kFCx2EWrEo9SwbQl0SUvYsvQxijsvKy8Mlm8rCJCoiutSBuhXkbf3aoZLpeD0kZKSTRf6wZCgCgCgEoDL+mOQJOKZZwX6r0lUlwdaW03rrRHqsSOOon0VSYyq7PPBQBQBQBQHNbymI/o/QpcabeS+2SqxbssKUO0bEjvqn1nh7lKVsH2L3Q+KdNcaJruv7loXFjOrLimklSvrJ2J6txVEpyjsmejdcZbtCaY0JJWEBsKPtKCSbdqj1dp2rDcp8syoxhweGVRJSFIbCXmiSvVa6CexXA+FZ8yHllseZUSK2ypXoUah9Enex8b0dkn3Nq6odSwirMFx9rcJSwp5T30iSv2rjuF7GrzReHuMo2zfbg8/4l4wpwnRWu7y/+B3VyecCgCgCgCgPfRzI9Q6SMVw8f1eIQkSgOWpJ0mqjVx6bS70Ms0r4NbqMTAoBKAWgEoDIc+uKf6VorZ3RGwfWnsUpwg+61StGvu5IWvf2ce4tWxShQBQBQBQCEAggi4PEdYoES2AzNbRhPKJeYT7JPFaOR7xwPnzryuv0zotePS+D2XhmsWopSb8y5JCQCAXPWXm0j+zSlXxSTUJPBYtNnOKoO+0mY88kcdaEpH+UUeB0tEbmKUSEwWFEOOC6yOKE8Cew8h291S9DpXqLV7Lkia/WLSUNp+Z7IjwAlISkAACwA4AV6xfB4cWgCgCgCgDvoYYxwxao3ShldxNwH0SGXO0aCQPOq7XLzJlt4c/LJfJtgqAWQUAUAUAlAY9nD2eleTc7nCWyO7WamaL1v8EDxD+GvydO+rQpwoAoAoAoAoDm6lwqaMdZaeDqNDibXSSoDn2HhUTXqL08m+xP8Mb/xcUnjJMsYvoKm5rC0rbVpUtpBWP8ACLqHvHbXlpR7o9ria/6FexYrTpgMrUo7ekdQUIT4H2j5W7axjHqMqE5dv6kFGSoLkl1xTrpeVrcUBdXVw5V6fw5JaeLXc8d4w5f4ySk84O9TirCgCgCgCgCgI9rfpCykkHf1h0juDZvVfrv9JZ+HcyNuqvLQKASgFoAoDIekNoxulLC5BsEzcLWwn9pCis+4ipWjeLUQ9cs0iVbFILQBQBQBQHGTLjxReQ8hvnZR38q1lOMeWbxrlJ7IeZajOZhLsjDTdqGsLu4CPSrBuEDqGx3PZx5V2tujZW649y00OmlVYrZ9iaDDUl1MpCRZSdLiVbHb4KBuD+Fedlt5WerhJ+qIORYyEKcWooQgFSiVbAddaJZ2R2d0kt2ROOYW9gmGN4s/q9A+q7rWn22Crhtz2G/MH3ei0V30oKEjyfiND1FrtjyyMiz4ku3qz6Fn7N7HyNWcZxlwymnVOHqQ4763NORaAKAKAThQDXBGvXOlbAG0m/qcZ+SsHfZSSge+q3XPzpFt4dHyNm0CoJYi0AUAUAlAZp00RvQN4DjiUj9CnBtxXMIcFj8K6VS6ZpnK6HXXKPwRo34G466vDzoUAc7UBFTcfiRlKQ3qfdSSkpb4A9RJrhPURjt3JVWksms8IgHsfmzlOJQoR2knSA0SCe9XHmOFqiz1E57cE6vSVw3e7GWydSiLniTzPjXF+7JCWNka10OJ0YZNbNtQLZPik/O9cZ8nWPBPY9DEKQue0m0dwj1gD6iuAc+R8D11Dvq6l1Imaa7pfTLhnDDIf5Tme0P0SOsFw8nHBwT2gcT22HXbTT1b9bOuqux5EeukkD/hhQXY6n2xv31OgvMV74MKSkaAlQvp237Nq7o5Pcex8YmwSjS8XWtQBQ8SrjsLHjxtzrrG+cCPZpq7O2PwTsXMUVwBMpKo6uZPtI8/4gVKhqYvlYIVmjnHeO5Md1SCHgWgCgO3RZHE/OuP4sUgoiNNwm1dv0lfCqbUz6rWXujh00o1iuBKCgCgEoAoCEzpgicxZXxLClWvIZIbJ5LHtJP+ICgMmytNXOwdkyAUymLsPoJ3C0bG/fa/jVzp7OutFBqq/p2te5L13I41xGaiDEU+rc8EJ+0rkP8AfbXOyahFtnSmt2zUUUJai2xa5JAtc86rC9EhD8yVfaWT8vlWEZZ3UNQCftEJ8zb51szBpPRzicfDsakRpLiWm5EYrC1q0pBbNzc9yif7prlYu5vBjzO+aZpYCsOd9Ugek0OOqAC3AQbHf6Kb2FuJvyrlfXOFXWif4aqLdSoXcMjcj5jxKOpxph1MzDoyEoDKiPZO+yFDgQBc3ve43HGtdJCdkXnsd/F69NROKp7rffJKdIWYI+IYZBjQyrUuRqeQtBBbCUm1+0k7ddjbhXeEWpblTJ7GWSk6Jb6eQXceO/zrotjQbyh+juEbkDUO8bj4UYQjLocLiNvZV5ggH51jkzwXLL8xMnDm21E+mYSEOX4mw2PiPferKialEpdVU4Tb7MlK7EcZ4vPRhmGSJrnBpsqAvbUrkPE2rS2fRByOlNbssUS8dE+BuYJk2MJV/XJqlTJJPErXb4AJFUbeXk9EljZFyrBkKAKAKASgFoDGM54d/wAK54M5I04TjivaN7JZkgfBXxPZUrS29E8PhkLW0/UhlcocKKUJJWpKUi+ok7AVbNrkpcPOCk41iRmvl8ghlsENJPUbXJ7TVZbZ9SWexdaen6UMPkiln2pKeJulXutXJEg7RdozZ+7WVwYY7iJ1zGE9RKj3AfxtQFty1FXMxv0TaUrV6s4vSrsW38K3i1F5ZgsmeYiIuU0sGxcelNBS+sglX+momtnmtlp4PWnq4J/P9mRHRtEZku4xEeFi2GXErTx31g/5RXPQWNJol+P1r6sH8f2Z1zvFMFcRkrCtThUCBbbSasZT6kmefxgomKI0zUq5ONjzST/EVz7my4GixdCgOaSKdghjAJLyj2C/kBWsTLJaDKcgyUyGRdSRZSb/AEk8x8PEV0hJweUcralZHpZdo77clhDzKtTaxcGrOMlJZRSSi4PpZHw8PObs5RMFRdWHYepMrEVDgog3Q34kb9ndVdrLcvoRaaCnEfqSNxAA4CwqCWItAFAJQC0AlAFAQ+bMvRMz4FJwqbcIdF0OJ4trH0VDuNAYLiE7E4hcy3jCC1Oimzqzwktj6Kk9YI3P86mLUSlBQZCWljC12DB4BxC2zxUg7dlafB3+SNS4SpRVsotaVd6f51qjYk2RZlsdSR8K2Rqx9haQqUtX2UW8z+FFyOxc8h7ZpbPXEeT70H5ViZlEz0nKth2Gt9cwqPcG1j/UKh6x/bwXfgMc6tv2T/YiOjRenMM9H9pEB/wrH/1XLRPdkv8AUK9D/P7DjpDWFYpGR1JUfcP41Zr0o8v3KNi6fZZXb6xT7vwrDMoYVkDDDgAt0Ei4NvcK1ibMfd1bGo4iYzLw/wDQcPYVKlTDpjMJ3PpDzt1df862je600jhbpo2yUv8AzNv6P8qoypgaY7ivSz5CvTTX+PpHD8hwFQ287smJJLCLRQyFAFAFAFAFAFAFAUzpGyKzm2Ch6OsRsXigmLIHP7iusH3ed2cAwhhuXExGXBxdlUbEWyEuMKHIfZ5Ed1doSzyc5LA2xJPoXC4m1lDcdR4VmWwRKDYCtzUfYOtOp9Fxq9lXh/O/nWEGW/JBtmaOetp0fu3+VYkIkp0mruvDGv8ArKP7g/jUHWvyo9B+n4/5iT+P3REdHitObFJ+3EWPek/KuWi9TJf6gX24P5/Y758Xqx5odTbnxRVu+EeT9ypYsUiOlN/aU4nTfs3PuBrRmURgrYEQG93Ck2WHFb/3j8q54NsnRGIPpcRGDC5Elw6WmmxdSzy2FYc8chRNs6MOj9WAg41jYDmNSEWCCbpioP1Rba/WfLnfk3k3SwaLWDIUAUAUAUAUAUAUAUAhFxQFXzxkjCs3RkCWksTWgfQTGtnG+ztHYaAxiTgMvJs51vNkZS2HEluNiLCStncEXV1K3HH8akVWQT85GvhY0vp++5GsOJdaQtBCgQN0m4rKZue4qyxiLLl7Jc/Nr8eHvtWOAXnJx05ogW5lwH/1L/hWZcGY8kj0lK/pOAj7MdR81fhVdrXwj0n6eXmsfwiJyMrTnKP95h0fu1z0frZL8fX2Iv5/ZnbOKwvH1/dQT5qI/wBNXD7HjikY08XJ7TKP1Que8/h8a07mTwSEi6lBI5k8qywd40B/NKYcHLENUma2gCTLI0stg72UrmQTWLLIdKUeTSqFinJy47GwdH/R1h+VB64+sTsYWn85KWNkdYQOQ7ePwqNnJJLxQBQBQBQBQBQBQBQBQBQBQBQHKTGYlsOR5TLbzLiSlbbiApKweIIOxFAZrmHodw2QtcrLUteEyDv6IDWwo/s8vDyrKbRjBQMZyVnLCW1CRhAnNp3D8BevhwOk7+6t/qe5jp9hzlvNWG4dmKArF1PQHGyr0yJLKkFF21jfxIrbrTNelolM75mwTEsYZdhYpFeaRHCdSV87naoGrTm1g9H4FdVVGfW8NjDK+P4RBzTClScSjNsJSsKWpewuDWmmjKM8tEjxrUVWafphJN5OGYM14TJxxxUR9ctS20pQmO2VlR1LNh51azsjnY8moNjPDMq5vxuS4/DwJyOh1RIdnH0QSO478LVyc/Y26S9YD0Ns60P5sxFU9Y39Uj3bZHjxV7q0bb5NkkjT8Nw2FhcNEPDYjMWMj6LTKAlI8Bz7awZHVrUAUAUAUAUAUAUAUAUAUAUAUAUAUAUAUBxkR2JSPRyWGnkHilxAUPI0BFu5Sy279PAcMP8A4qB8qA8M5Ry0jdGA4YD/ANqg/EUBKxIUWGjRDjMsJ+y02Ej3UA4oAoAoAoAoAoAoAoAoAoD/2Q=="
                                                alt="Avatar" class="img-fluid rounded-circle">
                                        </div>
                                        <div class="col-md-6 col-lg-6 text-center ">
                                            <h5 class="text-dark fw-bold">Clinic</h5>
                                            <span class="text-dark">CHD Meyrin</span>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-12 text-center">
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-info text-white" type="button">Import a new photo</button>

                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row d-flex align-items-center justify-content-center">
                                <div class="col-12 col-md-6 col-lg-6">
                                    <form action="" method="">
                                        <h5>General information.</h5>
                                        <div class="row mb-4 mt-2">
                                            <div class="col">
                                                <label class="clinic_name" for="form3Example1">Clinic name</label>
                                                <input type="text" id="clinic_name" name="clinic_name" placeholder="Name"
                                                    class="form-control" />
                                            </div>
                                            <div class="col">
                                                <label class="phone" for="form3Example2">Phone</label>
                                                <input type="text" id="phone" name="phone" placeholder="phone"
                                                    class="form-control" />
                                            </div>
                                        </div>
                                        <div class="row mb-4 mt-2">
                                            <div class="col">
                                                <label class="clinic_name" for="form3Example1">Email</label>
                                                <input type="email" id="Email" name="Email" placeholder="email"
                                                    class="form-control" />
                                            </div>
                                            <div class="col lang_mar">
                                                <label class="lang" for="lang">Language</label>
                                                <select
                                                    class="multipleSelect2 js-example-basic-multiple  form-select p-5 px-6"
                                                    name="lang[]" multiple="true" style="width: 218px;">
                                                    <option value="urdu">Urdu</option>
                                                    <option value="eng">English</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-4 mt-2">
                                            <div class="col">
                                                <label class="clinic_name" for="address">Address</label>
                                                <input type="text" id="address" name="address"
                                                    placeholder="Address" class="form-control" />
                                            </div>
                                            <div class="col">
                                                <label class="State" for="State">State</label>
                                                <input type="text" id="State" name="State" placeholder="State"
                                                    class="form-control" />
                                            </div>
                                        </div>
                                        <div class="row mb-4 mt-2">
                                            <div class="col">
                                                <label class="npa" for="npa">NPA</label>
                                                <input type="text" id="npa" name="npa" placeholder="NPA"
                                                    class="form-control" />
                                            </div>
                                            <div class="col">
                                                <label class="city" for="city">City</label>
                                                <input type="text" id="city" name="city" placeholder="City"
                                                    class="form-control" />
                                            </div>
                                        </div>
                                        <div class="row mb-4 mt-5 text-center">
                                            <div class="col">
                                                <div class="d-grid ">
                                                    <button class="btn btn-info text-white" type="button">Update
                                                        information</button>
                                                </div>
                                            </div>
                                        </div>

                                </div>
                                <div class="col-12 col-md-6 col-lg-6 ">
                                    <div class="mb-3">
                                        <h5 class="form-label" for="textAreaExample">Description</h5>
                                        <textarea class="form-control" id="textAreaExample1" rows="8">
                                                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores sequi distinctio consectetur delectus a, itaque sapiente sint eaque aliquam similique in laboriosam fugit alias! Incidunt blanditiis cupiditate delectus eligendi cumque!
                                         </textarea>
                                    </div>
                                    <div class="mb-3">
                                        <h5 for="exampleFormControlInput1" class="form-label">Website</h5>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            placeholder="URL">
                                    </div>

                                    <div class="row">
                                        <div class="col-12 mb-2">
                                            Social
                                        </div>

                                        <div class="col-12">
                                            <a class="btn btn-info btn-sm rounded-circle mb-3" href="#!"
                                                role="button">
                                                <i class="fab fa-facebook text-white"></i>
                                            </a> <span class="px-1"> Your Facebook profile url</span>
                                        </div>
                                        <div class="col-12">
                                            <a class="btn btn-info btn-sm rounded-circle mb-3" href="#!"
                                                role="button">
                                                <i class="fab fa-instagram text-white"></i>
                                            </a>
                                            <span class="px-1">Your Instagram profile url</span>
                                        </div>
                                        <div class="col-12">
                                            <a class="btn btn-info btn-sm rounded-circle mb-3" href="#!"
                                                role="button">
                                                <i class="fab fa-linkedin text-white"></i>
                                            </a> <span class="px-1">Your LinkedIn profile url</span>
                                        </div>
                                    </div>

                                    </form>
                                </div>
                            </div>
                            <hr>
                            <div class="row align-items-center">
                                <div class="col-lg-12 col-sm-12 col-md-12 col-sm-12 col-12">
                                    <h5 class="text-nowrap  text-start text-dark  py-2 px-2"> Billing and payment methods.
                                    </h5>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-12 col-md-2 col-lg-2">
                                    <div class="mb-3">
                                        <label class="clinic_points " for="clinic_points">Clinic
                                            points</label>
                                        <span class=" wd100 form-control  form-control-sm  text-center">
                                            Points </span>
                                    </div>
                                </div>
                                <div class="col-12 col-md-2 col-lg-2">
                                    <div class="mb-3">
                                        <label class="clinic_points " for="clinic_points ">Private
                                            points
                                        </label>
                                        <span class=" wd100 form-control  form-control-sm  text-center">
                                            Points </span>
                                    </div>
                                </div>
                                <div class="col-12 col-md-2 col-lg-2">
                                    <div class="mb-3">
                                        <label class="ins_points " for="ins_points ">Insurance
                                            points
                                        </label>
                                        <span class=" wd100 form-control  form-control-sm  text-center">
                                            Points </span>
                                    </div>
                                </div>
                                <!-- Fourth Input -->
                                <div class="col-12 col-md-2 col-lg-2">
                                    <div class="mb-3">
                                        <label class="Soci_points " for="Soci_points">Social points
                                        </label>
                                        <span class=" wd100 form-control  form-control-sm  text-center">
                                            Points </span>
                                    </div>
                                </div>
                                <div class="col-12 col-md-2 col-lg-2">
                                    <div class="mb-3">
                                        <label class="tva_applic" for="tva_applic">TVA applicable
                                        </label>
                                        <span class=" wd100 form-control  form-control-sm  text-center">
                                            % </span>
                                    </div>

                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-12 col-md-12 col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Payment method</th>
                                                    <th scope="col">State</th>
                                                    <th scope="col">Comments</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>12/07/23</td>
                                                    <td>On site</td>
                                                    <td>Live</td>
                                                    <td>Lorem ipsum dolor si amet net ipsum me</td>
                                                    <td>
                                                        <a
                                                            class="btn btn-sm text-dark bg-white text-decoration-none text-nowrap px-0 py-2"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="13.37"
                                                                height="14.526" viewBox="0 0 13.37 14.526">
                                                                <defs>
                                                                    <clipPath id="clip-path">
                                                                        <rect id="Rectangle_34" data-name="Rectangle 34"
                                                                            width="4.029" height="15.744"
                                                                            fill="#102940" />
                                                                    </clipPath>
                                                                </defs>
                                                                <g id="Group_393" data-name="Group 393"
                                                                    transform="translate(10.329) rotate(41)">
                                                                    <g id="Group_244" data-name="Group 244"
                                                                        transform="translate(0 0)"
                                                                        clip-path="url(#clip-path)">
                                                                        <path id="Path_29" data-name="Path 29"
                                                                            d="M2.014,0A2.016,2.016,0,0,0,0,2.014V12.27a.549.549,0,0,0,.058.245l1.465,2.93a.554.554,0,0,0,.983,0l1.465-2.93a.549.549,0,0,0,.058-.245V2.014A2.016,2.016,0,0,0,2.014,0M2.93,12.14l-.916,1.831L1.1,12.14v-.053H2.93Zm0-1.152H1.1V4.029H2.93Zm0-8.058H1.1V2.014a.916.916,0,1,1,1.831,0Z"
                                                                            transform="translate(0 0)" fill="#102940" />
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                            Edit
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>12/07/23</td>
                                                    <td>On site</td>
                                                    <td>Live</td>
                                                    <td>Lorem ipsum dolor si amet net ipsum me</td>
                                                    <td>
                                                        <a
                                                            class="btn btn-sm text-dark bg-white text-decoration-none text-nowrap px-0 py-2"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="13.37"
                                                                height="14.526" viewBox="0 0 13.37 14.526">
                                                                <defs>
                                                                    <clipPath id="clip-path">
                                                                        <rect id="Rectangle_34" data-name="Rectangle 34"
                                                                            width="4.029" height="15.744"
                                                                            fill="#102940" />
                                                                    </clipPath>
                                                                </defs>
                                                                <g id="Group_393" data-name="Group 393"
                                                                    transform="translate(10.329) rotate(41)">
                                                                    <g id="Group_244" data-name="Group 244"
                                                                        transform="translate(0 0)"
                                                                        clip-path="url(#clip-path)">
                                                                        <path id="Path_29" data-name="Path 29"
                                                                            d="M2.014,0A2.016,2.016,0,0,0,0,2.014V12.27a.549.549,0,0,0,.058.245l1.465,2.93a.554.554,0,0,0,.983,0l1.465-2.93a.549.549,0,0,0,.058-.245V2.014A2.016,2.016,0,0,0,2.014,0M2.93,12.14l-.916,1.831L1.1,12.14v-.053H2.93Zm0-1.152H1.1V4.029H2.93Zm0-8.058H1.1V2.014a.916.916,0,1,1,1.831,0Z"
                                                                            transform="translate(0 0)" fill="#102940" />
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                            Edit
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>12/07/23</td>
                                                    <td>On site</td>
                                                    <td>Live</td>
                                                    <td>Lorem ipsum dolor si amet net ipsum me</td>
                                                    <td>
                                                        <a
                                                            class="btn btn-sm text-dark bg-white text-decoration-none text-nowrap px-0 py-2"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="13.37"
                                                                height="14.526" viewBox="0 0 13.37 14.526">
                                                                <defs>
                                                                    <clipPath id="clip-path">
                                                                        <rect id="Rectangle_34" data-name="Rectangle 34"
                                                                            width="4.029" height="15.744"
                                                                            fill="#102940" />
                                                                    </clipPath>
                                                                </defs>
                                                                <g id="Group_393" data-name="Group 393"
                                                                    transform="translate(10.329) rotate(41)">
                                                                    <g id="Group_244" data-name="Group 244"
                                                                        transform="translate(0 0)"
                                                                        clip-path="url(#clip-path)">
                                                                        <path id="Path_29" data-name="Path 29"
                                                                            d="M2.014,0A2.016,2.016,0,0,0,0,2.014V12.27a.549.549,0,0,0,.058.245l1.465,2.93a.554.554,0,0,0,.983,0l1.465-2.93a.549.549,0,0,0,.058-.245V2.014A2.016,2.016,0,0,0,2.014,0M2.93,12.14l-.916,1.831L1.1,12.14v-.053H2.93Zm0-1.152H1.1V4.029H2.93Zm0-8.058H1.1V2.014a.916.916,0,1,1,1.831,0Z"
                                                                            transform="translate(0 0)" fill="#102940" />
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                            Edit
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <td>
                                            <div class="d-grid  col-1 float start pb-4">
                                                <a href="#" class="btn btn-sm text-white btn-info ml-4"
                                                    data-bs-toggle="modal" data-bs-target="#payment-method">
                                                    Add
                                                </a>
                                            </div>
                                        </td>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade bg-white" id="ex-with-icons-tabs-2" role="tabpanel"
                        aria-labelledby="ex-with-icons-tab-2">
                        <div class="container-fluid">
                            <div class="row align-items-center d-flex justify-content-between">
                                <div class="col-lg-3 col-md-6 col-sm-12 py-2">
                                    <div class="row  justify-content-center align-items-center">
                                        <div class="col-md-6 col-lg-6 text-center">
                                            <h4 class="text-dark text-nowrap"> All users.</h4>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-12 text-center">
                                    <div class="d-grid ">
                                        <button class="btn  btn-sm btn-info text-white" data-bs-toggle="modal"
                                            data-bs-target="#addnewuser" type="button">Add new user</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 mt-2 d-flex align-items-center">
                                <div class="col-12 col-md-12 col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Full name</th>
                                                    <th scope="col">E-mail</th>
                                                    <th scope="col">Role</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>39384</td>
                                                    <td>First name Last name</td>
                                                    <td>nompraticien@gmail.com</td>
                                                    <td>Administrator</td>
                                                    <td class="d-flex"> <a
                                                            class="btn btn-sm mx-2 text-danger bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                            X Delete
                                                        </a>
                                                        <a
                                                            class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                            <i class="fas fa-user"></i>
                                                            Connexion
                                                        </a>
                                                        <a
                                                            class="btn btn-sm text-dark bg-white text-decoration-none text-nowrap px-0 py-2"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="13.37"
                                                                height="14.526" viewBox="0 0 13.37 14.526">
                                                                <defs>
                                                                    <clipPath id="clip-path">
                                                                        <rect id="Rectangle_34" data-name="Rectangle 34"
                                                                            width="4.029" height="15.744"
                                                                            fill="#102940" />
                                                                    </clipPath>
                                                                </defs>
                                                                <g id="Group_393" data-name="Group 393"
                                                                    transform="translate(10.329) rotate(41)">
                                                                    <g id="Group_244" data-name="Group 244"
                                                                        transform="translate(0 0)"
                                                                        clip-path="url(#clip-path)">
                                                                        <path id="Path_29" data-name="Path 29"
                                                                            d="M2.014,0A2.016,2.016,0,0,0,0,2.014V12.27a.549.549,0,0,0,.058.245l1.465,2.93a.554.554,0,0,0,.983,0l1.465-2.93a.549.549,0,0,0,.058-.245V2.014A2.016,2.016,0,0,0,2.014,0M2.93,12.14l-.916,1.831L1.1,12.14v-.053H2.93Zm0-1.152H1.1V4.029H2.93Zm0-8.058H1.1V2.014a.916.916,0,1,1,1.831,0Z"
                                                                            transform="translate(0 0)" fill="#102940" />
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                            Edit
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>39384</td>
                                                    <td>First name Last name</td>
                                                    <td>nompraticien@gmail.com</td>
                                                    <td>Administrator</td>
                                                    <td class="d-flex"> <a
                                                            class="btn btn-sm mx-2 text-danger bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                            X Delete
                                                        </a>
                                                        <a
                                                            class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                            <i class="fas fa-user"></i>
                                                            Connexion
                                                        </a>
                                                        <a
                                                            class="btn btn-sm text-dark bg-white text-decoration-none text-nowrap px-0 py-2"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="13.37"
                                                                height="14.526" viewBox="0 0 13.37 14.526">
                                                                <defs>
                                                                    <clipPath id="clip-path">
                                                                        <rect id="Rectangle_34" data-name="Rectangle 34"
                                                                            width="4.029" height="15.744"
                                                                            fill="#102940" />
                                                                    </clipPath>
                                                                </defs>
                                                                <g id="Group_393" data-name="Group 393"
                                                                    transform="translate(10.329) rotate(41)">
                                                                    <g id="Group_244" data-name="Group 244"
                                                                        transform="translate(0 0)"
                                                                        clip-path="url(#clip-path)">
                                                                        <path id="Path_29" data-name="Path 29"
                                                                            d="M2.014,0A2.016,2.016,0,0,0,0,2.014V12.27a.549.549,0,0,0,.058.245l1.465,2.93a.554.554,0,0,0,.983,0l1.465-2.93a.549.549,0,0,0,.058-.245V2.014A2.016,2.016,0,0,0,2.014,0M2.93,12.14l-.916,1.831L1.1,12.14v-.053H2.93Zm0-1.152H1.1V4.029H2.93Zm0-8.058H1.1V2.014a.916.916,0,1,1,1.831,0Z"
                                                                            transform="translate(0 0)" fill="#102940" />
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                            Edit
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>39384</td>
                                                    <td>First name Last name</td>
                                                    <td>nompraticien@gmail.com</td>
                                                    <td>Administrator</td>
                                                    <td class="d-flex"> <a
                                                            class="btn btn-sm mx-2 text-danger bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                            X Delete
                                                        </a>
                                                        <a
                                                            class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                            <i class="fas fa-user"></i>
                                                            Connexion
                                                        </a>
                                                        <a
                                                            class="btn btn-sm text-dark bg-white text-decoration-none text-nowrap px-0 py-2"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="13.37"
                                                                height="14.526" viewBox="0 0 13.37 14.526">
                                                                <defs>
                                                                    <clipPath id="clip-path">
                                                                        <rect id="Rectangle_34" data-name="Rectangle 34"
                                                                            width="4.029" height="15.744"
                                                                            fill="#102940" />
                                                                    </clipPath>
                                                                </defs>
                                                                <g id="Group_393" data-name="Group 393"
                                                                    transform="translate(10.329) rotate(41)">
                                                                    <g id="Group_244" data-name="Group 244"
                                                                        transform="translate(0 0)"
                                                                        clip-path="url(#clip-path)">
                                                                        <path id="Path_29" data-name="Path 29"
                                                                            d="M2.014,0A2.016,2.016,0,0,0,0,2.014V12.27a.549.549,0,0,0,.058.245l1.465,2.93a.554.554,0,0,0,.983,0l1.465-2.93a.549.549,0,0,0,.058-.245V2.014A2.016,2.016,0,0,0,2.014,0M2.93,12.14l-.916,1.831L1.1,12.14v-.053H2.93Zm0-1.152H1.1V4.029H2.93Zm0-8.058H1.1V2.014a.916.916,0,1,1,1.831,0Z"
                                                                            transform="translate(0 0)" fill="#102940" />
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                            Edit
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>39384</td>
                                                    <td>First name Last name</td>
                                                    <td>nompraticien@gmail.com</td>
                                                    <td>Administrator</td>
                                                    <td class="d-flex"> <a
                                                            class="btn btn-sm mx-2 text-danger bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                            X Delete
                                                        </a>
                                                        <a
                                                            class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                            <i class="fas fa-user"></i>
                                                            Connexion
                                                        </a>
                                                        <a
                                                            class="btn btn-sm text-dark bg-white text-decoration-none text-nowrap px-0 py-2"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="13.37"
                                                                height="14.526" viewBox="0 0 13.37 14.526">
                                                                <defs>
                                                                    <clipPath id="clip-path">
                                                                        <rect id="Rectangle_34" data-name="Rectangle 34"
                                                                            width="4.029" height="15.744"
                                                                            fill="#102940" />
                                                                    </clipPath>
                                                                </defs>
                                                                <g id="Group_393" data-name="Group 393"
                                                                    transform="translate(10.329) rotate(41)">
                                                                    <g id="Group_244" data-name="Group 244"
                                                                        transform="translate(0 0)"
                                                                        clip-path="url(#clip-path)">
                                                                        <path id="Path_29" data-name="Path 29"
                                                                            d="M2.014,0A2.016,2.016,0,0,0,0,2.014V12.27a.549.549,0,0,0,.058.245l1.465,2.93a.554.554,0,0,0,.983,0l1.465-2.93a.549.549,0,0,0,.058-.245V2.014A2.016,2.016,0,0,0,2.014,0M2.93,12.14l-.916,1.831L1.1,12.14v-.053H2.93Zm0-1.152H1.1V4.029H2.93Zm0-8.058H1.1V2.014a.916.916,0,1,1,1.831,0Z"
                                                                            transform="translate(0 0)" fill="#102940" />
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                            Edit
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>39384</td>
                                                    <td>First name Last name</td>
                                                    <td>nompraticien@gmail.com</td>
                                                    <td>Administrator</td>
                                                    <td class="d-flex"> <a
                                                            class="btn btn-sm mx-2 text-danger bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                            X Delete
                                                        </a>
                                                        <a
                                                            class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                            <i class="fas fa-user"></i>
                                                            Connexion
                                                        </a>
                                                        <a
                                                            class="btn btn-sm text-dark bg-white text-decoration-none text-nowrap px-0 py-2"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="13.37"
                                                                height="14.526" viewBox="0 0 13.37 14.526">
                                                                <defs>
                                                                    <clipPath id="clip-path">
                                                                        <rect id="Rectangle_34" data-name="Rectangle 34"
                                                                            width="4.029" height="15.744"
                                                                            fill="#102940" />
                                                                    </clipPath>
                                                                </defs>
                                                                <g id="Group_393" data-name="Group 393"
                                                                    transform="translate(10.329) rotate(41)">
                                                                    <g id="Group_244" data-name="Group 244"
                                                                        transform="translate(0 0)"
                                                                        clip-path="url(#clip-path)">
                                                                        <path id="Path_29" data-name="Path 29"
                                                                            d="M2.014,0A2.016,2.016,0,0,0,0,2.014V12.27a.549.549,0,0,0,.058.245l1.465,2.93a.554.554,0,0,0,.983,0l1.465-2.93a.549.549,0,0,0,.058-.245V2.014A2.016,2.016,0,0,0,2.014,0M2.93,12.14l-.916,1.831L1.1,12.14v-.053H2.93Zm0-1.152H1.1V4.029H2.93Zm0-8.058H1.1V2.014a.916.916,0,1,1,1.831,0Z"
                                                                            transform="translate(0 0)" fill="#102940" />
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                            Edit
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>39384</td>
                                                    <td>First name Last name</td>
                                                    <td>nompraticien@gmail.com</td>
                                                    <td>Administrator</td>
                                                    <td class="d-flex"> <a
                                                            class="btn btn-sm mx-2 text-danger bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                            X Delete
                                                        </a>
                                                        <a
                                                            class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                            <i class="fas fa-user"></i>
                                                            Connexion
                                                        </a>
                                                        <a
                                                            class="btn btn-sm text-dark bg-white text-decoration-none text-nowrap px-0 py-2"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="13.37"
                                                                height="14.526" viewBox="0 0 13.37 14.526">
                                                                <defs>
                                                                    <clipPath id="clip-path">
                                                                        <rect id="Rectangle_34" data-name="Rectangle 34"
                                                                            width="4.029" height="15.744"
                                                                            fill="#102940" />
                                                                    </clipPath>
                                                                </defs>
                                                                <g id="Group_393" data-name="Group 393"
                                                                    transform="translate(10.329) rotate(41)">
                                                                    <g id="Group_244" data-name="Group 244"
                                                                        transform="translate(0 0)"
                                                                        clip-path="url(#clip-path)">
                                                                        <path id="Path_29" data-name="Path 29"
                                                                            d="M2.014,0A2.016,2.016,0,0,0,0,2.014V12.27a.549.549,0,0,0,.058.245l1.465,2.93a.554.554,0,0,0,.983,0l1.465-2.93a.549.549,0,0,0,.058-.245V2.014A2.016,2.016,0,0,0,2.014,0M2.93,12.14l-.916,1.831L1.1,12.14v-.053H2.93Zm0-1.152H1.1V4.029H2.93Zm0-8.058H1.1V2.014a.916.916,0,1,1,1.831,0Z"
                                                                            transform="translate(0 0)" fill="#102940" />
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                            Edit
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>39384</td>
                                                    <td>First name Last name</td>
                                                    <td>nompraticien@gmail.com</td>
                                                    <td>Administrator</td>
                                                    <td class="d-flex"> <a
                                                            class="btn btn-sm mx-2 text-danger bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                            X Delete
                                                        </a>
                                                        <a
                                                            class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                            <i class="fas fa-user"></i>
                                                            Connexion
                                                        </a>
                                                        <a
                                                            class="btn btn-sm text-dark bg-white text-decoration-none text-nowrap px-0 py-2"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="13.37"
                                                                height="14.526" viewBox="0 0 13.37 14.526">
                                                                <defs>
                                                                    <clipPath id="clip-path">
                                                                        <rect id="Rectangle_34" data-name="Rectangle 34"
                                                                            width="4.029" height="15.744"
                                                                            fill="#102940" />
                                                                    </clipPath>
                                                                </defs>
                                                                <g id="Group_393" data-name="Group 393"
                                                                    transform="translate(10.329) rotate(41)">
                                                                    <g id="Group_244" data-name="Group 244"
                                                                        transform="translate(0 0)"
                                                                        clip-path="url(#clip-path)">
                                                                        <path id="Path_29" data-name="Path 29"
                                                                            d="M2.014,0A2.016,2.016,0,0,0,0,2.014V12.27a.549.549,0,0,0,.058.245l1.465,2.93a.554.554,0,0,0,.983,0l1.465-2.93a.549.549,0,0,0,.058-.245V2.014A2.016,2.016,0,0,0,2.014,0M2.93,12.14l-.916,1.831L1.1,12.14v-.053H2.93Zm0-1.152H1.1V4.029H2.93Zm0-8.058H1.1V2.014a.916.916,0,1,1,1.831,0Z"
                                                                            transform="translate(0 0)" fill="#102940" />
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                            Edit
                                                        </a>
                                                    </td>
                                                </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="ex-with-icons-tabs-3" role="tabpanel"
                        aria-labelledby="ex-with-icons-tab-3">

                        <form action="" method="">
                            <div class="container-fluid bg-white">
                                <div class="row align-middle">
                                    <div class="col-12 col-md-7 col-lg-7 mt-2  align-middle ">
                                        <strong>Clinic opening hours.</strong>
                                        <p class="mt-2">Set the clinic’s opening hours. By default, these hours apply to
                                            all
                                            practitioners. You can define the opening hours for each practitioner
                                            in the “Practitioner schedule” section below.</p>
                                        <ul class="custom-square overflow-x">
                                            <li>
                                                <div>
                                                    <span>Monday:</span>
                                                    <input type="time" id="mon-start" class="form-control text-nowrap"
                                                        name="mon-start">
                                                    <b class="px-1">_</b>
                                                    <input type="time" id="mon-end" class="form-control text-nowrap"
                                                        name="mon-end">
                                                    <a href="#"
                                                        class="btn btn-sm btn-info ml-4 text-white px-1">Add</a>
                                                </div>

                                            </li>
                                            <li>
                                                <div>
                                                    <span>Tuesday:</span>
                                                    <input type="time" id="tues-start"
                                                        class="form-control text-nowrap" name="tues-start">
                                                    <b class="px-1">_</b>
                                                    <input type="time" id="tues-end" class="form-control text-nowrap"
                                                        name="tues-end">
                                                    <a href="#"
                                                        class="btn btn-sm text-white btn-info ml-4 px-1">Add</a>
                                                </div>
                                            </li>

                                            <li>
                                                <div>
                                                    <span>Wednesday</span>
                                                    <input type="time" id="wed-start" class="form-control text-nowrap"
                                                        name="wed-start">
                                                    <b class="px-1">_</b>
                                                    <input type="time" id="wed-end" class="form-control text-nowrap"
                                                        name="wed-end">
                                                    <a href="#"
                                                        class="btn btn-sm text-white btn-info ml-4 px-1">Add</a>
                                                </div>
                                            </li>

                                            <li>
                                                <div>
                                                    <span>Thursday:</span>
                                                    <input type="time" id="thurs-start"
                                                        class="form-control text-nowrap" name="thurs-start">
                                                    <b class="px-1">_</b>
                                                    <input type="time" id="thurs-end" class="form-control text-nowrap"
                                                        name="thurs-end">
                                                    <a href="#"
                                                        class="btn btn-sm text-white btn-info ml-4 px-1">Add</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <span>Friday:</span>
                                                    <input type="time" id="fri-start" class="form-control text-nowrap"
                                                        name="fri-start">
                                                    <b class="px-1">_</b>
                                                    <input type="time" id="fri-end" class="form-control text-nowrap"
                                                        name="fri-end">
                                                    <a href="#"
                                                        class="btn btn-sm text-white btn-info ml-4 px-1">Add</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <span class="mr-5">Saturday:</span>
                                                    <input type="time" id="sat1-start"
                                                        class="form-control text-nowrap" name="sat1-start">
                                                    <b class="px-1">_</b>
                                                    <input type="time" id="sat1-end" class="form-control text-nowrap"
                                                        name="sat1-end">
                                                    <input type="time" id="sat2-start"
                                                        class="m-g form-control text-nowrap" name="sat2-start">
                                                    <b class="px-1">_</b>
                                                    <input type="time" id="sat2-end" class="form-control text-nowrap"
                                                        name="sat2-end">
                                                    <span class="text-danger px-2"> X</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <span>Sunday:</span>

                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="col-12 col-md-5 col-lg-5  border mt-2 border-light align-middle">
                                        <strong>Closing.</strong>
                                        <div class="row mt-2">
                                            <div class="col-12 col-md-6 col-lg-6">
                                                <label for="startDate">Start Date:</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1"><svg id="Map"
                                                            xmlns="http://www.w3.org/2000/svg" width="19.5"
                                                            height="17.5" viewBox="0 0 19.5 17.5">
                                                            <g id="Group_14" data-name="Group 14">
                                                                <path id="Union"
                                                                    d="M13.75,9a.75.75,0,0,0,0,1.5h2a.75.75,0,0,0,0-1.5Z"
                                                                    fill="#102940"></path>
                                                                <path id="Union-2" data-name="Union"
                                                                    d="M8,9.75A.75.75,0,0,1,8.75,9h2a.75.75,0,0,1,0,1.5h-2A.75.75,0,0,1,8,9.75Z"
                                                                    fill="#102940"></path>
                                                                <path id="Union-3" data-name="Union"
                                                                    d="M3.75,12a.75.75,0,0,0,0,1.5h2a.75.75,0,0,0,0-1.5Z"
                                                                    fill="#102940"></path>
                                                                <path id="Union-4" data-name="Union"
                                                                    d="M13,12.75a.75.75,0,0,1,.75-.75h2a.75.75,0,0,1,0,1.5h-2A.75.75,0,0,1,13,12.75Z"
                                                                    fill="#102940"></path>
                                                                <path id="Union-5" data-name="Union"
                                                                    d="M8.75,12a.75.75,0,0,0,0,1.5h2a.75.75,0,0,0,0-1.5Z"
                                                                    fill="#102940"></path>
                                                                <g id="Group_1" data-name="Group 1">
                                                                    <g id="Union-6" data-name="Union" fill="none">
                                                                        <path
                                                                            d="M3,9.75A.75.75,0,0,1,3.75,9h2a.75.75,0,0,1,0,1.5h-2A.75.75,0,0,1,3,9.75Z"
                                                                            stroke="none"></path>
                                                                        <path
                                                                            d="M 3.75 9 L 5.75 9 C 6.164210319519043 9 6.5 9.335789680480957 6.5 9.75 C 6.5 10.16421031951904 6.164210319519043 10.5 5.75 10.5 L 3.75 10.5 C 3.335790157318115 10.5 3 10.16421031951904 3 9.75 C 3 9.335789680480957 3.335790157318115 9 3.75 9 Z"
                                                                            stroke="none" fill="#102940"></path>
                                                                    </g>
                                                                    <g id="Union-7" data-name="Union" fill="none">
                                                                        <path
                                                                            d="M4.75,0A.75.75,0,0,1,5.5.75V1H14V.75a.75.75,0,0,1,1.5,0V1h1.25A2.75,2.75,0,0,1,19.5,3.75v11a2.75,2.75,0,0,1-2.75,2.75h-14A2.75,2.75,0,0,1,0,14.75v-11A2.75,2.75,0,0,1,2.75,1H4V.75A.75.75,0,0,1,4.75,0ZM14,2.5v.25a.75.75,0,0,0,1.5,0V2.5h1.25A1.25,1.25,0,0,1,18,3.75v2a.25.25,0,0,1-.25.25h-16a.25.25,0,0,1-.25-.25v-2A1.25,1.25,0,0,1,2.75,2.5H4v.25a.75.75,0,0,0,1.5,0V2.5ZM1.5,7.482a1.765,1.765,0,0,0,.25.018h16A1.765,1.765,0,0,0,18,7.482V14.75A1.25,1.25,0,0,1,16.75,16h-14A1.25,1.25,0,0,1,1.5,14.75Z"
                                                                            stroke="none"></path>
                                                                        <path
                                                                            d="M 4.75 0 C 5.164210319519043 0 5.5 0.3357906341552734 5.5 0.75 L 5.5 1 L 14 1 L 14 0.75 C 14 0.3357906341552734 14.33579063415527 0 14.75 0 C 15.16420936584473 0 15.5 0.3357906341552734 15.5 0.75 L 15.5 1 L 16.75 1 C 18.26877975463867 1 19.5 2.231220245361328 19.5 3.75 L 19.5 14.75 C 19.5 16.26877975463867 18.26877975463867 17.5 16.75 17.5 L 2.75 17.5 C 1.231220245361328 17.5 0 16.26877975463867 0 14.75 L 0 3.75 C 0 2.231220245361328 1.231220245361328 1 2.75 1 L 4 1 L 4 0.75 C 4 0.3357906341552734 4.335789680480957 0 4.75 0 Z M 4.75 3.5 C 4.335789680480957 3.5 4 3.164210319519043 4 2.75 L 4 2.5 L 2.75 2.5 C 2.059640884399414 2.5 1.5 3.059639930725098 1.5 3.75 L 1.5 5.75 C 1.5 5.888070106506348 1.611930847167969 6 1.75 6 L 17.75 6 C 17.88806915283203 6 18 5.888070106506348 18 5.75 L 18 3.75 C 18 3.059639930725098 17.44034957885742 2.5 16.75 2.5 L 15.5 2.5 L 15.5 2.75 C 15.5 3.164210319519043 15.16420936584473 3.5 14.75 3.5 C 14.33579063415527 3.5 14 3.164210319519043 14 2.75 L 14 2.5 L 5.5 2.5 L 5.5 2.75 C 5.5 3.164210319519043 5.164210319519043 3.5 4.75 3.5 Z M 17.75 7.5 L 1.75 7.5 C 1.665119171142578 7.5 1.581649780273438 7.493960380554199 1.5 7.482279777526855 L 1.5 14.75 C 1.5 15.4403600692749 2.059640884399414 16 2.75 16 L 16.75 16 C 17.44034957885742 16 18 15.4403600692749 18 14.75 L 18 7.482279777526855 C 17.91835021972656 7.493960380554199 17.83488082885742 7.5 17.75 7.5 Z"
                                                                            stroke="none" fill="#102940"></path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg></span>
                                                    <input type="text" class="form-control" placeholder="07/09/2023"
                                                        name="startDate" id="startDate" value="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-6">
                                                <label for="endDate">End Date:</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1"><svg id="Map"
                                                            xmlns="http://www.w3.org/2000/svg" width="19.5"
                                                            height="17.5" viewBox="0 0 19.5 17.5">
                                                            <g id="Group_14" data-name="Group 14">
                                                                <path id="Union"
                                                                    d="M13.75,9a.75.75,0,0,0,0,1.5h2a.75.75,0,0,0,0-1.5Z"
                                                                    fill="#102940"></path>
                                                                <path id="Union-2" data-name="Union"
                                                                    d="M8,9.75A.75.75,0,0,1,8.75,9h2a.75.75,0,0,1,0,1.5h-2A.75.75,0,0,1,8,9.75Z"
                                                                    fill="#102940"></path>
                                                                <path id="Union-3" data-name="Union"
                                                                    d="M3.75,12a.75.75,0,0,0,0,1.5h2a.75.75,0,0,0,0-1.5Z"
                                                                    fill="#102940"></path>
                                                                <path id="Union-4" data-name="Union"
                                                                    d="M13,12.75a.75.75,0,0,1,.75-.75h2a.75.75,0,0,1,0,1.5h-2A.75.75,0,0,1,13,12.75Z"
                                                                    fill="#102940"></path>
                                                                <path id="Union-5" data-name="Union"
                                                                    d="M8.75,12a.75.75,0,0,0,0,1.5h2a.75.75,0,0,0,0-1.5Z"
                                                                    fill="#102940"></path>
                                                                <g id="Group_1" data-name="Group 1">
                                                                    <g id="Union-6" data-name="Union" fill="none">
                                                                        <path
                                                                            d="M3,9.75A.75.75,0,0,1,3.75,9h2a.75.75,0,0,1,0,1.5h-2A.75.75,0,0,1,3,9.75Z"
                                                                            stroke="none"></path>
                                                                        <path
                                                                            d="M 3.75 9 L 5.75 9 C 6.164210319519043 9 6.5 9.335789680480957 6.5 9.75 C 6.5 10.16421031951904 6.164210319519043 10.5 5.75 10.5 L 3.75 10.5 C 3.335790157318115 10.5 3 10.16421031951904 3 9.75 C 3 9.335789680480957 3.335790157318115 9 3.75 9 Z"
                                                                            stroke="none" fill="#102940"></path>
                                                                    </g>
                                                                    <g id="Union-7" data-name="Union" fill="none">
                                                                        <path
                                                                            d="M4.75,0A.75.75,0,0,1,5.5.75V1H14V.75a.75.75,0,0,1,1.5,0V1h1.25A2.75,2.75,0,0,1,19.5,3.75v11a2.75,2.75,0,0,1-2.75,2.75h-14A2.75,2.75,0,0,1,0,14.75v-11A2.75,2.75,0,0,1,2.75,1H4V.75A.75.75,0,0,1,4.75,0ZM14,2.5v.25a.75.75,0,0,0,1.5,0V2.5h1.25A1.25,1.25,0,0,1,18,3.75v2a.25.25,0,0,1-.25.25h-16a.25.25,0,0,1-.25-.25v-2A1.25,1.25,0,0,1,2.75,2.5H4v.25a.75.75,0,0,0,1.5,0V2.5ZM1.5,7.482a1.765,1.765,0,0,0,.25.018h16A1.765,1.765,0,0,0,18,7.482V14.75A1.25,1.25,0,0,1,16.75,16h-14A1.25,1.25,0,0,1,1.5,14.75Z"
                                                                            stroke="none"></path>
                                                                        <path
                                                                            d="M 4.75 0 C 5.164210319519043 0 5.5 0.3357906341552734 5.5 0.75 L 5.5 1 L 14 1 L 14 0.75 C 14 0.3357906341552734 14.33579063415527 0 14.75 0 C 15.16420936584473 0 15.5 0.3357906341552734 15.5 0.75 L 15.5 1 L 16.75 1 C 18.26877975463867 1 19.5 2.231220245361328 19.5 3.75 L 19.5 14.75 C 19.5 16.26877975463867 18.26877975463867 17.5 16.75 17.5 L 2.75 17.5 C 1.231220245361328 17.5 0 16.26877975463867 0 14.75 L 0 3.75 C 0 2.231220245361328 1.231220245361328 1 2.75 1 L 4 1 L 4 0.75 C 4 0.3357906341552734 4.335789680480957 0 4.75 0 Z M 4.75 3.5 C 4.335789680480957 3.5 4 3.164210319519043 4 2.75 L 4 2.5 L 2.75 2.5 C 2.059640884399414 2.5 1.5 3.059639930725098 1.5 3.75 L 1.5 5.75 C 1.5 5.888070106506348 1.611930847167969 6 1.75 6 L 17.75 6 C 17.88806915283203 6 18 5.888070106506348 18 5.75 L 18 3.75 C 18 3.059639930725098 17.44034957885742 2.5 16.75 2.5 L 15.5 2.5 L 15.5 2.75 C 15.5 3.164210319519043 15.16420936584473 3.5 14.75 3.5 C 14.33579063415527 3.5 14 3.164210319519043 14 2.75 L 14 2.5 L 5.5 2.5 L 5.5 2.75 C 5.5 3.164210319519043 5.164210319519043 3.5 4.75 3.5 Z M 17.75 7.5 L 1.75 7.5 C 1.665119171142578 7.5 1.581649780273438 7.493960380554199 1.5 7.482279777526855 L 1.5 14.75 C 1.5 15.4403600692749 2.059640884399414 16 2.75 16 L 16.75 16 C 17.44034957885742 16 18 15.4403600692749 18 14.75 L 18 7.482279777526855 C 17.91835021972656 7.493960380554199 17.83488082885742 7.5 17.75 7.5 Z"
                                                                            stroke="none" fill="#102940"></path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg></span>
                                                    <input type="text" class="form-control" placeholder="07/09/2023"
                                                        name="endDate" id="endDate" value=""> <span
                                                        class="text-danger fs-3 px-2"> x </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        name="emer_open" id="emer_open">
                                                    <label class="form-check-label" for="emer_open">
                                                        Emergency slots remain open
                                                    </label>
                                                </div>
                                                <div class="col-12 mt-2">
                                                    <button type="button" class="btn text-white btn-info btn-sm">Add
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2 align-middle">
                                    <div class="col-12 col-md-7 col-lg-7 mt-2 border border-light align-middle ">
                                        <strong>Emergency slots.</strong>
                                        <ul class="custom-square overflow-x">
                                            <li>
                                                <div>
                                                    <span>Monday:</span>

                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <span>Tuesday:</span>
                                                    <input type="time" id="emer-tues-start"
                                                        class="form-control text-nowrap" name="tues-start">
                                                    <b class="px-1">_</b>
                                                    <input type="time" id="emer-tues-end"
                                                        class="form-control text-nowrap" name="tues-end">
                                                    <a href="#" class="btn btn-sm text-white ml-4 btn-info">Add</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <span>Wednesday:</span>
                                                    <input type="time" id="emer-tues-start"
                                                        class="form-control text-nowrap" name="emer-wed-start">
                                                    <b class="px-1">_</b>
                                                    <input type="time" id="emer-wed-end"
                                                        class="form-control text-nowrap" name="emer-wed-end">
                                                    <a href="#" class="btn btn-sm text-white ml-4 btn-info">Add</a>
                                                </div>
                                            </li>

                                            <li>
                                                <div>
                                                    <span>Thursday:</span>

                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <span>Friday:</span>
                                                    <input type="time" id="emer-fri-start"
                                                        class="form-control text-nowrap" name="fri-start">
                                                    <b class="px-1">_</b>
                                                    <input type="time" id="emer-fri-end"
                                                        class="form-control text-nowrap" name="emer-fri-end">
                                                    <a href="#" class="btn btn-sm ml-4 text-white btn-info">Add</a>

                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <span>Saturday:</span>

                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <span>Sunday:</span>

                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="col-12 col-md-5 col-lg-5  border mt-2 border-light align-middle">
                                        <strong>Time slot.</strong><br>
                                        <small>Define the duration of each reservation slot.</small>
                                        <div class="row mt-2">
                                            <div class="col-12 col-md-4 col-lg-4">
                                                <div class="mb-3 px-3">
                                                    <label for="startDate">Dentist</label>
                                                    <input type="number" class="form-control date-input"
                                                        name="duration-start" id="duration-start" placeholder="Min"
                                                        min="0">
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-4 col-lg-4">
                                                <div class="mb-3">
                                                    <label for="endDate">Hygienist</label>
                                                    <input type="number" class="form-control date-input"
                                                        name="duration-end" id="duration-end" placeholder="Min"
                                                        min="0">

                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="row align-middle">
                                    <div class="col-12 col-md-12 col-lg-12 text-center align-middle">
                                        <button class="btn btn-info text-white  btn-sm" type="button">Save</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-6 mt-2 border border-light align-middle ">
                                        <strong>Specialist schedules.</strong><br>
                                        <span class="mt-2">Specialist</span><br>
                                        <div class="btn-group mt-2">
                                            <button
                                                class="btn btn-outline-secondary bg-white text-dark btn-sm dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Specialist n°1
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li
                                                    </ul>
                                        </div>
                                        <div class="row mt-2 align-middle">
                                            <div class="col col-md-12 col-lg-12 d-flex align-items-center align-middle">
                                                <span>Planning:</span> <span class="text-danger">x</span>
                                                <span>Hygienist</span>
                                                <a href="#"
                                                    class="btn btn-sm text-white btn-info ml-4 text-end">Add</a>
                                            </div>
                                        </div>
                                        <ul class="custom-square overflow-x">
                                            <li>
                                                <div class="row align-middle">
                                                    <div
                                                        class="col col-md-3 col-lg-3 d-flex align-items-center align-middle">
                                                        <span>Monday:</span>
                                                    </div>
                                                    <div
                                                        class="col col-md-6 col-lg-6 d-flex align-items-center align-middle">
                                                        <input type="time" id="Specialist1-mon-start"
                                                            class="form-control text-nowrap " name="mon-start">
                                                        <b class="px-1">_</b>
                                                        <input type="time" id="Specialist1-mon-end"
                                                            class="form-control text-nowrap" name="mon-end">
                                                    </div>
                                                    <div
                                                        class="col col-md-3 col-lg-3 d-flex align-items-center align-middle">
                                                        <a href="#"
                                                            class="btn btn-sm text-white btn-info ml-5">Add</a>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="row align-middle">
                                                    <div
                                                        class="col col-md-3 col-lg-3 d-flex align-items-center align-middle">
                                                        <span>Tuesday:</span>
                                                    </div>
                                                    <div
                                                        class="col col-md-6 col-lg-6 d-flex align-items-center align-middle">
                                                        <input type="time" id="Specialist2-tues-start"
                                                            class="form-control text-nowrap"
                                                            name="Specialist2-tues-start">
                                                        <b class="px-1">_</b>
                                                        <input type="time" id="Specialist2-tues-end"
                                                            class="form-control text-nowrap" name="Specialist2-tues-end">
                                                    </div>
                                                    <div
                                                        class="col col-md-3 col-lg-3 d-flex align-items-center align-middle">
                                                        <a href="#"
                                                            class="btn text-white btn-sm btn-info ml-5">Add</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row align-middle">
                                                    <div
                                                        class="col col-md-3 col-lg-3 d-flex align-items-center align-middle">
                                                        <span>Wednesday:</span>
                                                    </div>
                                                    <div
                                                        class="col col-md-6 col-lg-6 d-flex align-items-center align-middle">
                                                        <input type="time" id="Specialist3-wed-start"
                                                            class="form-control text-nowrap" name="Specialist3-wed-start">
                                                        <b class="px-1">_</b>
                                                        <input type="time" id="Specialist3-wed-end"
                                                            class="form-control text-nowrap" name="Specialist3-wed-end">
                                                    </div>
                                                    <div
                                                        class="col col-md-3 col-lg-3 d-flex align-items-center align-middle">
                                                        <a href="#"
                                                            class="btn  text-white btn-sm btn-info ml-5 ">Add</a>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="row align-middle">
                                                    <div
                                                        class="col col-md-3 col-lg-3 d-flex align-items-center align-middle">
                                                        <span>Thursday:</span>
                                                    </div>
                                                    <div
                                                        class="col col-md-6 col-lg-6 d-flex align-items-center align-middle">
                                                        <input type="time" id="Specialist4-thurs-start"
                                                            class="form-control text-nowrap"
                                                            name="Specialist4-thurs-start">
                                                        <b class="px-1">_</b>
                                                        <input type="time" id="Specialist4-thurs-end"
                                                            class="form-control text-nowrap" name="Specialist4-thurs-end">
                                                    </div>
                                                    <div
                                                        class="col col-md-3 col-lg-3 d-flex align-items-center align-middle">
                                                        <a href="#"
                                                            class="btn text-white btn-sm btn-info ml-5 ">Add</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row align-middle">
                                                    <div
                                                        class="col col-md-3 col-lg-3 d-flex align-items-center align-middle">
                                                        <span>Friday:</span>
                                                    </div>
                                                    <div
                                                        class="col col-md-6 col-lg-6 d-flex align-items-center align-middle">
                                                        <input type="time" id="Specialist5-fri-start"
                                                            class="form-control text-nowrap" name="Specialist5-fri-start">
                                                        <b class="px-1">_</b>
                                                        <input type="time" id="Specialist5-fri-end"
                                                            class="form-control text-nowrap" name="Specialist5-fri-end">
                                                    </div>
                                                    <div
                                                        class="col col-md-3 col-lg-3 d-flex align-items-center align-middle">
                                                        <a href="#"
                                                            class="btn text-white btn-sm btn-info ml-4 ml-5">Add</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row align-middle">
                                                    <div
                                                        class="col col-md-3 col-lg-3 d-flex align-items-center align-middle">
                                                        <span>Saturday:</span>
                                                    </div>
                                                    <div
                                                        class="col col-md-6 col-lg-6 d-flex align-items-center align-middle">
                                                        <input type="time" id="Specialist6-sat1-start"
                                                            class="form-control text-nowrap"
                                                            name="Specialist6-sat1-start">
                                                        <b class="px-1">_</b>
                                                        <input type="time" id="Specialist6-sat1-end"
                                                            class="form-control text-nowrap" name="sat1-end">
                                                        <input type="time" id="Specialist6-sat2-start"
                                                            class="m-g form-control text-nowrap"
                                                            name="Specialist6-sat2-start">
                                                        <b class="px-1">_</b>
                                                        <input type="time" id="Specialist6-sat2-end"
                                                            class="form-control text-nowrap" name="Specialist6-sat2-end">
                                                    </div>
                                                    <div
                                                        class="col col-md-3 col-lg-3 d-flex align-items-center align-middle">
                                                        <a href="#"
                                                            class="btn btn-sm text-danger btn-light ml-5">X</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row align-middle">
                                                    <div
                                                        class="col col-md-3 col-lg-3 d-flex align-items-center align-middle">
                                                        <span>Sunday:</span>
                                                    </div>

                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-6  border mt-2 border-light align-middle">
                                        <strong>Vacation.</strong>
                                        <div class="row mt-2 align-middle">
                                            <div class="col-12 col-md-4 col-lg-4 align-middle">
                                                <div class="mb-3 px-3">
                                                    <label for="startDate">Start Date:</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1"><svg
                                                                id="Map" xmlns="http://www.w3.org/2000/svg"
                                                                width="19.5" height="17.5" viewBox="0 0 19.5 17.5">
                                                                <g id="Group_14" data-name="Group 14">
                                                                    <path id="Union"
                                                                        d="M13.75,9a.75.75,0,0,0,0,1.5h2a.75.75,0,0,0,0-1.5Z"
                                                                        fill="#102940"></path>
                                                                    <path id="Union-2" data-name="Union"
                                                                        d="M8,9.75A.75.75,0,0,1,8.75,9h2a.75.75,0,0,1,0,1.5h-2A.75.75,0,0,1,8,9.75Z"
                                                                        fill="#102940"></path>
                                                                    <path id="Union-3" data-name="Union"
                                                                        d="M3.75,12a.75.75,0,0,0,0,1.5h2a.75.75,0,0,0,0-1.5Z"
                                                                        fill="#102940"></path>
                                                                    <path id="Union-4" data-name="Union"
                                                                        d="M13,12.75a.75.75,0,0,1,.75-.75h2a.75.75,0,0,1,0,1.5h-2A.75.75,0,0,1,13,12.75Z"
                                                                        fill="#102940"></path>
                                                                    <path id="Union-5" data-name="Union"
                                                                        d="M8.75,12a.75.75,0,0,0,0,1.5h2a.75.75,0,0,0,0-1.5Z"
                                                                        fill="#102940"></path>
                                                                    <g id="Group_1" data-name="Group 1">
                                                                        <g id="Union-6" data-name="Union"
                                                                            fill="none">
                                                                            <path
                                                                                d="M3,9.75A.75.75,0,0,1,3.75,9h2a.75.75,0,0,1,0,1.5h-2A.75.75,0,0,1,3,9.75Z"
                                                                                stroke="none"></path>
                                                                            <path
                                                                                d="M 3.75 9 L 5.75 9 C 6.164210319519043 9 6.5 9.335789680480957 6.5 9.75 C 6.5 10.16421031951904 6.164210319519043 10.5 5.75 10.5 L 3.75 10.5 C 3.335790157318115 10.5 3 10.16421031951904 3 9.75 C 3 9.335789680480957 3.335790157318115 9 3.75 9 Z"
                                                                                stroke="none" fill="#102940"></path>
                                                                        </g>
                                                                        <g id="Union-7" data-name="Union"
                                                                            fill="none">
                                                                            <path
                                                                                d="M4.75,0A.75.75,0,0,1,5.5.75V1H14V.75a.75.75,0,0,1,1.5,0V1h1.25A2.75,2.75,0,0,1,19.5,3.75v11a2.75,2.75,0,0,1-2.75,2.75h-14A2.75,2.75,0,0,1,0,14.75v-11A2.75,2.75,0,0,1,2.75,1H4V.75A.75.75,0,0,1,4.75,0ZM14,2.5v.25a.75.75,0,0,0,1.5,0V2.5h1.25A1.25,1.25,0,0,1,18,3.75v2a.25.25,0,0,1-.25.25h-16a.25.25,0,0,1-.25-.25v-2A1.25,1.25,0,0,1,2.75,2.5H4v.25a.75.75,0,0,0,1.5,0V2.5ZM1.5,7.482a1.765,1.765,0,0,0,.25.018h16A1.765,1.765,0,0,0,18,7.482V14.75A1.25,1.25,0,0,1,16.75,16h-14A1.25,1.25,0,0,1,1.5,14.75Z"
                                                                                stroke="none"></path>
                                                                            <path
                                                                                d="M 4.75 0 C 5.164210319519043 0 5.5 0.3357906341552734 5.5 0.75 L 5.5 1 L 14 1 L 14 0.75 C 14 0.3357906341552734 14.33579063415527 0 14.75 0 C 15.16420936584473 0 15.5 0.3357906341552734 15.5 0.75 L 15.5 1 L 16.75 1 C 18.26877975463867 1 19.5 2.231220245361328 19.5 3.75 L 19.5 14.75 C 19.5 16.26877975463867 18.26877975463867 17.5 16.75 17.5 L 2.75 17.5 C 1.231220245361328 17.5 0 16.26877975463867 0 14.75 L 0 3.75 C 0 2.231220245361328 1.231220245361328 1 2.75 1 L 4 1 L 4 0.75 C 4 0.3357906341552734 4.335789680480957 0 4.75 0 Z M 4.75 3.5 C 4.335789680480957 3.5 4 3.164210319519043 4 2.75 L 4 2.5 L 2.75 2.5 C 2.059640884399414 2.5 1.5 3.059639930725098 1.5 3.75 L 1.5 5.75 C 1.5 5.888070106506348 1.611930847167969 6 1.75 6 L 17.75 6 C 17.88806915283203 6 18 5.888070106506348 18 5.75 L 18 3.75 C 18 3.059639930725098 17.44034957885742 2.5 16.75 2.5 L 15.5 2.5 L 15.5 2.75 C 15.5 3.164210319519043 15.16420936584473 3.5 14.75 3.5 C 14.33579063415527 3.5 14 3.164210319519043 14 2.75 L 14 2.5 L 5.5 2.5 L 5.5 2.75 C 5.5 3.164210319519043 5.164210319519043 3.5 4.75 3.5 Z M 17.75 7.5 L 1.75 7.5 C 1.665119171142578 7.5 1.581649780273438 7.493960380554199 1.5 7.482279777526855 L 1.5 14.75 C 1.5 15.4403600692749 2.059640884399414 16 2.75 16 L 16.75 16 C 17.44034957885742 16 18 15.4403600692749 18 14.75 L 18 7.482279777526855 C 17.91835021972656 7.493960380554199 17.83488082885742 7.5 17.75 7.5 Z"
                                                                                stroke="none" fill="#102940"></path>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg></span>
                                                        <input type="text" class="form-control date-input"
                                                            name="startDate" id="startDate" placeholder="07/09/2023">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4 col-lg-4 align-middle">
                                                <div class="mb-3">
                                                    <label for="endDate">End Date:</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1"><svg
                                                                id="Map" xmlns="http://www.w3.org/2000/svg"
                                                                width="19.5" height="17.5" viewBox="0 0 19.5 17.5">
                                                                <g id="Group_14" data-name="Group 14">
                                                                    <path id="Union"
                                                                        d="M13.75,9a.75.75,0,0,0,0,1.5h2a.75.75,0,0,0,0-1.5Z"
                                                                        fill="#102940"></path>
                                                                    <path id="Union-2" data-name="Union"
                                                                        d="M8,9.75A.75.75,0,0,1,8.75,9h2a.75.75,0,0,1,0,1.5h-2A.75.75,0,0,1,8,9.75Z"
                                                                        fill="#102940"></path>
                                                                    <path id="Union-3" data-name="Union"
                                                                        d="M3.75,12a.75.75,0,0,0,0,1.5h2a.75.75,0,0,0,0-1.5Z"
                                                                        fill="#102940"></path>
                                                                    <path id="Union-4" data-name="Union"
                                                                        d="M13,12.75a.75.75,0,0,1,.75-.75h2a.75.75,0,0,1,0,1.5h-2A.75.75,0,0,1,13,12.75Z"
                                                                        fill="#102940"></path>
                                                                    <path id="Union-5" data-name="Union"
                                                                        d="M8.75,12a.75.75,0,0,0,0,1.5h2a.75.75,0,0,0,0-1.5Z"
                                                                        fill="#102940"></path>
                                                                    <g id="Group_1" data-name="Group 1">
                                                                        <g id="Union-6" data-name="Union"
                                                                            fill="none">
                                                                            <path
                                                                                d="M3,9.75A.75.75,0,0,1,3.75,9h2a.75.75,0,0,1,0,1.5h-2A.75.75,0,0,1,3,9.75Z"
                                                                                stroke="none"></path>
                                                                            <path
                                                                                d="M 3.75 9 L 5.75 9 C 6.164210319519043 9 6.5 9.335789680480957 6.5 9.75 C 6.5 10.16421031951904 6.164210319519043 10.5 5.75 10.5 L 3.75 10.5 C 3.335790157318115 10.5 3 10.16421031951904 3 9.75 C 3 9.335789680480957 3.335790157318115 9 3.75 9 Z"
                                                                                stroke="none" fill="#102940"></path>
                                                                        </g>
                                                                        <g id="Union-7" data-name="Union"
                                                                            fill="none">
                                                                            <path
                                                                                d="M4.75,0A.75.75,0,0,1,5.5.75V1H14V.75a.75.75,0,0,1,1.5,0V1h1.25A2.75,2.75,0,0,1,19.5,3.75v11a2.75,2.75,0,0,1-2.75,2.75h-14A2.75,2.75,0,0,1,0,14.75v-11A2.75,2.75,0,0,1,2.75,1H4V.75A.75.75,0,0,1,4.75,0ZM14,2.5v.25a.75.75,0,0,0,1.5,0V2.5h1.25A1.25,1.25,0,0,1,18,3.75v2a.25.25,0,0,1-.25.25h-16a.25.25,0,0,1-.25-.25v-2A1.25,1.25,0,0,1,2.75,2.5H4v.25a.75.75,0,0,0,1.5,0V2.5ZM1.5,7.482a1.765,1.765,0,0,0,.25.018h16A1.765,1.765,0,0,0,18,7.482V14.75A1.25,1.25,0,0,1,16.75,16h-14A1.25,1.25,0,0,1,1.5,14.75Z"
                                                                                stroke="none"></path>
                                                                            <path
                                                                                d="M 4.75 0 C 5.164210319519043 0 5.5 0.3357906341552734 5.5 0.75 L 5.5 1 L 14 1 L 14 0.75 C 14 0.3357906341552734 14.33579063415527 0 14.75 0 C 15.16420936584473 0 15.5 0.3357906341552734 15.5 0.75 L 15.5 1 L 16.75 1 C 18.26877975463867 1 19.5 2.231220245361328 19.5 3.75 L 19.5 14.75 C 19.5 16.26877975463867 18.26877975463867 17.5 16.75 17.5 L 2.75 17.5 C 1.231220245361328 17.5 0 16.26877975463867 0 14.75 L 0 3.75 C 0 2.231220245361328 1.231220245361328 1 2.75 1 L 4 1 L 4 0.75 C 4 0.3357906341552734 4.335789680480957 0 4.75 0 Z M 4.75 3.5 C 4.335789680480957 3.5 4 3.164210319519043 4 2.75 L 4 2.5 L 2.75 2.5 C 2.059640884399414 2.5 1.5 3.059639930725098 1.5 3.75 L 1.5 5.75 C 1.5 5.888070106506348 1.611930847167969 6 1.75 6 L 17.75 6 C 17.88806915283203 6 18 5.888070106506348 18 5.75 L 18 3.75 C 18 3.059639930725098 17.44034957885742 2.5 16.75 2.5 L 15.5 2.5 L 15.5 2.75 C 15.5 3.164210319519043 15.16420936584473 3.5 14.75 3.5 C 14.33579063415527 3.5 14 3.164210319519043 14 2.75 L 14 2.5 L 5.5 2.5 L 5.5 2.75 C 5.5 3.164210319519043 5.164210319519043 3.5 4.75 3.5 Z M 17.75 7.5 L 1.75 7.5 C 1.665119171142578 7.5 1.581649780273438 7.493960380554199 1.5 7.482279777526855 L 1.5 14.75 C 1.5 15.4403600692749 2.059640884399414 16 2.75 16 L 16.75 16 C 17.44034957885742 16 18 15.4403600692749 18 14.75 L 18 7.482279777526855 C 17.91835021972656 7.493960380554199 17.83488082885742 7.5 17.75 7.5 Z"
                                                                                stroke="none" fill="#102940"></path>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg></span>
                                                        <input type="text" class="form-control date-input"
                                                            name="endDate" id="endDate" placeholder="07/09/2023">
                                                        <span class="text-danger px-2"> x </span>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4 col-lg-4 align-items-center align-middle">
                                                <div class="mb-3">
                                                    <label for="vaction">Type of vacation</label>
                                                    <div class="input-group bg-white">
                                                        <input type="text" class="form-control date-input"
                                                            name="vaction" id="vaction" placeholder="">
                                                        <span class="text-danger px-2"> x </span>
                                                    </div>

                                                </div>
                                                <a href="#" class="btn text-white btn-info btn-sm"> Add</a>
                                            </div>
                                        </div>
                                        <div class="row mt-3 align-middle">
                                            <div class="col-12 col-md-12 col-lg-12 align-middle">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr> <b>Vacation history.</b> <span>(Last 12 months)</span></tr>
                                                            <tr>
                                                                <th scope="col">Starting date</th>
                                                                <th scope="col">End date</th>
                                                                <th scope="col">Duration</th>
                                                                <th scope="col">Type of vacation</th>
                                                                <th scope="col">Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>07/09/2023</td>
                                                                <td>07/09/2023</td>
                                                                <td>12 days</td>
                                                                <td>Paid</td>
                                                                <td>Completed</td>
                                                            </tr>
                                                            <tr>
                                                                <td>07/09/2023</td>
                                                                <td>07/09/2023</td>
                                                                <td>12 days</td>
                                                                <td>Paid</td>
                                                                <td>Completed</td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-12 col-lg-12 text-center align-middle">
                                                <button class="btn btn-info text-white  btn-sm"
                                                    type="button">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade  " id="ex-with-icons-tabs-5" role="tabpanel"
                        aria-labelledby="ex-with-icons-tab-5">
                        <div class="container-fluid">
                            <div class="row ">
                                <div
                                    class="col-lg-12 col-md-12 col-sm-12  bg-white d-flex justify-content-between align-items-center">
                                    <h4 class="text-dark text-nowrap mt-3 ">Fournisseurs.</h4>
                                    <a href="#" class="btn btn-sm text-white btn-info mt-3"
                                        data-bs-toggle="modal" data-bs-target="#addnewsupplier">
                                        Add supplier
                                    </a>
                                </div>
                            </div>
                            <div class="row pb-3 py-2 bg-white">
                                <div class="col-12 col-md-12 col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Full name</th>
                                                    <th scope="col">Country</th>
                                                    <th scope="col">Phone</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>21</td>
                                                    <td>Supplier’s name</td>
                                                    <td>
                                                        Switzerland</td>
                                                    <td>022 345 46 35</td>
                                                    <td class="d-flex"> <a
                                                            class="btn btn-sm mx-2 text-danger bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                            X Delete
                                                        </a>
                                                        <a
                                                            class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                            <i class="fas fa-user"></i>
                                                            Connexion
                                                        </a>
                                                        <a
                                                            class="btn btn-sm text-dark bg-white text-decoration-none text-nowrap px-0 py-2"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                width="13.37" height="14.526"
                                                                viewBox="0 0 13.37 14.526">
                                                                <defs>
                                                                    <clipPath id="clip-path">
                                                                        <rect id="Rectangle_34" data-name="Rectangle 34"
                                                                            width="4.029" height="15.744"
                                                                            fill="#102940" />
                                                                    </clipPath>
                                                                </defs>
                                                                <g id="Group_393" data-name="Group 393"
                                                                    transform="translate(10.329) rotate(41)">
                                                                    <g id="Group_244" data-name="Group 244"
                                                                        transform="translate(0 0)"
                                                                        clip-path="url(#clip-path)">
                                                                        <path id="Path_29" data-name="Path 29"
                                                                            d="M2.014,0A2.016,2.016,0,0,0,0,2.014V12.27a.549.549,0,0,0,.058.245l1.465,2.93a.554.554,0,0,0,.983,0l1.465-2.93a.549.549,0,0,0,.058-.245V2.014A2.016,2.016,0,0,0,2.014,0M2.93,12.14l-.916,1.831L1.1,12.14v-.053H2.93Zm0-1.152H1.1V4.029H2.93Zm0-8.058H1.1V2.014a.916.916,0,1,1,1.831,0Z"
                                                                            transform="translate(0 0)" fill="#102940" />
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                            Edit
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>21</td>
                                                    <td>Supplier name</td>
                                                    <td>
                                                        Switzerland</td>
                                                    <td>022 345 46 35</td>
                                                    <td class="d-flex"> <a
                                                            class="btn btn-sm mx-2 text-danger bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                            X Delete
                                                        </a>
                                                        <a
                                                            class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                            <i class="fas fa-user"></i>
                                                            Connexion
                                                        </a>
                                                        <a
                                                            class="btn btn-sm text-dark bg-white text-decoration-none text-nowrap px-0 py-2"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                width="13.37" height="14.526"
                                                                viewBox="0 0 13.37 14.526">
                                                                <defs>
                                                                    <clipPath id="clip-path">
                                                                        <rect id="Rectangle_34" data-name="Rectangle 34"
                                                                            width="4.029" height="15.744"
                                                                            fill="#102940" />
                                                                    </clipPath>
                                                                </defs>
                                                                <g id="Group_393" data-name="Group 393"
                                                                    transform="translate(10.329) rotate(41)">
                                                                    <g id="Group_244" data-name="Group 244"
                                                                        transform="translate(0 0)"
                                                                        clip-path="url(#clip-path)">
                                                                        <path id="Path_29" data-name="Path 29"
                                                                            d="M2.014,0A2.016,2.016,0,0,0,0,2.014V12.27a.549.549,0,0,0,.058.245l1.465,2.93a.554.554,0,0,0,.983,0l1.465-2.93a.549.549,0,0,0,.058-.245V2.014A2.016,2.016,0,0,0,2.014,0M2.93,12.14l-.916,1.831L1.1,12.14v-.053H2.93Zm0-1.152H1.1V4.029H2.93Zm0-8.058H1.1V2.014a.916.916,0,1,1,1.831,0Z"
                                                                            transform="translate(0 0)" fill="#102940" />
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                            Edit
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>21</td>
                                                    <td>Suppliers name</td>
                                                    <td>
                                                        Switzerland</td>
                                                    <td>022 345 46 35</td>
                                                    <td class="d-flex"> <a
                                                            class="btn btn-sm mx-2 text-danger bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                            X Delete
                                                        </a>
                                                        <a
                                                            class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                            <i class="fas fa-user"></i>
                                                            Connexion
                                                        </a>
                                                        <a
                                                            class="btn btn-sm text-dark bg-white text-decoration-none text-nowrap px-0 py-2"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                width="13.37" height="14.526"
                                                                viewBox="0 0 13.37 14.526">
                                                                <defs>
                                                                    <clipPath id="clip-path">
                                                                        <rect id="Rectangle_34" data-name="Rectangle 34"
                                                                            width="4.029" height="15.744"
                                                                            fill="#102940" />
                                                                    </clipPath>
                                                                </defs>
                                                                <g id="Group_393" data-name="Group 393"
                                                                    transform="translate(10.329) rotate(41)">
                                                                    <g id="Group_244" data-name="Group 244"
                                                                        transform="translate(0 0)"
                                                                        clip-path="url(#clip-path)">
                                                                        <path id="Path_29" data-name="Path 29"
                                                                            d="M2.014,0A2.016,2.016,0,0,0,0,2.014V12.27a.549.549,0,0,0,.058.245l1.465,2.93a.554.554,0,0,0,.983,0l1.465-2.93a.549.549,0,0,0,.058-.245V2.014A2.016,2.016,0,0,0,2.014,0M2.93,12.14l-.916,1.831L1.1,12.14v-.053H2.93Zm0-1.152H1.1V4.029H2.93Zm0-8.058H1.1V2.014a.916.916,0,1,1,1.831,0Z"
                                                                            transform="translate(0 0)" fill="#102940" />
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                            Edit
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>21</td>
                                                    <td>Suppliers name</td>
                                                    <td>
                                                        Switzerland</td>
                                                    <td>022 345 46 35</td>
                                                    <td class="d-flex"> <a
                                                            class="btn btn-sm mx-2 text-danger bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                            X Delete
                                                        </a>
                                                        <a
                                                            class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                            <i class="fas fa-user"></i>
                                                            Connexion
                                                        </a>
                                                        <a
                                                            class="btn btn-sm text-dark bg-white text-decoration-none text-nowrap px-0 py-2"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                width="13.37" height="14.526"
                                                                viewBox="0 0 13.37 14.526">
                                                                <defs>
                                                                    <clipPath id="clip-path">
                                                                        <rect id="Rectangle_34" data-name="Rectangle 34"
                                                                            width="4.029" height="15.744"
                                                                            fill="#102940" />
                                                                    </clipPath>
                                                                </defs>
                                                                <g id="Group_393" data-name="Group 393"
                                                                    transform="translate(10.329) rotate(41)">
                                                                    <g id="Group_244" data-name="Group 244"
                                                                        transform="translate(0 0)"
                                                                        clip-path="url(#clip-path)">
                                                                        <path id="Path_29" data-name="Path 29"
                                                                            d="M2.014,0A2.016,2.016,0,0,0,0,2.014V12.27a.549.549,0,0,0,.058.245l1.465,2.93a.554.554,0,0,0,.983,0l1.465-2.93a.549.549,0,0,0,.058-.245V2.014A2.016,2.016,0,0,0,2.014,0M2.93,12.14l-.916,1.831L1.1,12.14v-.053H2.93Zm0-1.152H1.1V4.029H2.93Zm0-8.058H1.1V2.014a.916.916,0,1,1,1.831,0Z"
                                                                            transform="translate(0 0)" fill="#102940" />
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                            Edit
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>21</td>
                                                    <td>Suppliers name</td>
                                                    <td>
                                                        Switzerland</td>
                                                    <td>022 345 46 35</td>
                                                    <td class="d-flex"> <a
                                                            class="btn btn-sm mx-2 text-danger bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                            X Delete
                                                        </a>
                                                        <a
                                                            class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                            <i class="fas fa-user"></i>
                                                            Connexion
                                                        </a>
                                                        <a
                                                            class="btn btn-sm text-dark bg-white text-decoration-none text-nowrap px-0 py-2"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                width="13.37" height="14.526"
                                                                viewBox="0 0 13.37 14.526">
                                                                <defs>
                                                                    <clipPath id="clip-path">
                                                                        <rect id="Rectangle_34" data-name="Rectangle 34"
                                                                            width="4.029" height="15.744"
                                                                            fill="#102940" />
                                                                    </clipPath>
                                                                </defs>
                                                                <g id="Group_393" data-name="Group 393"
                                                                    transform="translate(10.329) rotate(41)">
                                                                    <g id="Group_244" data-name="Group 244"
                                                                        transform="translate(0 0)"
                                                                        clip-path="url(#clip-path)">
                                                                        <path id="Path_29" data-name="Path 29"
                                                                            d="M2.014,0A2.016,2.016,0,0,0,0,2.014V12.27a.549.549,0,0,0,.058.245l1.465,2.93a.554.554,0,0,0,.983,0l1.465-2.93a.549.549,0,0,0,.058-.245V2.014A2.016,2.016,0,0,0,2.014,0M2.93,12.14l-.916,1.831L1.1,12.14v-.053H2.93Zm0-1.152H1.1V4.029H2.93Zm0-8.058H1.1V2.014a.916.916,0,1,1,1.831,0Z"
                                                                            transform="translate(0 0)" fill="#102940" />
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                            Edit
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>21</td>
                                                    <td>Suppliers name</td>
                                                    <td>
                                                        Switzerland</td>
                                                    <td>022 345 46 35</td>
                                                    <td class="d-flex"> <a
                                                            class="btn btn-sm mx-2 text-danger bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                            X Delete
                                                        </a>
                                                        <a
                                                            class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                            <i class="fas fa-user"></i>
                                                            Connexion
                                                        </a>
                                                        <a
                                                            class="btn btn-sm text-dark bg-white text-decoration-none text-nowrap px-0 py-2"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                width="13.37" height="14.526"
                                                                viewBox="0 0 13.37 14.526">
                                                                <defs>
                                                                    <clipPath id="clip-path">
                                                                        <rect id="Rectangle_34" data-name="Rectangle 34"
                                                                            width="4.029" height="15.744"
                                                                            fill="#102940" />
                                                                    </clipPath>
                                                                </defs>
                                                                <g id="Group_393" data-name="Group 393"
                                                                    transform="translate(10.329) rotate(41)">
                                                                    <g id="Group_244" data-name="Group 244"
                                                                        transform="translate(0 0)"
                                                                        clip-path="url(#clip-path)">
                                                                        <path id="Path_29" data-name="Path 29"
                                                                            d="M2.014,0A2.016,2.016,0,0,0,0,2.014V12.27a.549.549,0,0,0,.058.245l1.465,2.93a.554.554,0,0,0,.983,0l1.465-2.93a.549.549,0,0,0,.058-.245V2.014A2.016,2.016,0,0,0,2.014,0M2.93,12.14l-.916,1.831L1.1,12.14v-.053H2.93Zm0-1.152H1.1V4.029H2.93Zm0-8.058H1.1V2.014a.916.916,0,1,1,1.831,0Z"
                                                                            transform="translate(0 0)" fill="#102940" />
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                            Edit
                                                        </a>
                                                    </td>
                                                </tr>

                                        </table>
                                        <nav aria-label="Page navigation ">
                                            <ul class="pagination d-flex justify-content-end">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="#" aria-label="Previous">
                                                        <span aria-hidden="true"><svg style="transform: rotate(90deg);"
                                                                xmlns="http://www.w3.org/2000/svg" width="14.08"
                                                                height="8.448" viewBox="0 0 14.08 8.448">
                                                                <path id="Vector_22_Stroke_"
                                                                    data-name="Vector 22 (Stroke)"
                                                                    d="M.295.326a.938.938,0,0,1,1.422,0L7.04,6.22,12.363.326a.938.938,0,0,1,1.422,0,1.2,1.2,0,0,1,0,1.575L8.462,7.8a1.877,1.877,0,0,1-2.844,0L.295,1.9A1.2,1.2,0,0,1,.295.326Z"
                                                                    fill="#8791a3" />
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="page-item disabled"><a class="page-link"
                                                        href="#">Page
                                                        1/3</a></li>
                                                <!-- <li class="page-item"><a class="page-link" href="#">2</a></li> -->
                                                <!-- <li class="page-item"><a class="page-link" href="#">3</a></li> -->
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Next">
                                                        <span aria-hidden="true"><svg
                                                                style=" transform: rotate(270deg);"
                                                                xmlns="http://www.w3.org/2000/svg" width="14.08"
                                                                height="8.448" viewBox="0 0 14.08 8.448">
                                                                <path id="Vector_22_Stroke_"
                                                                    data-name="Vector 22 (Stroke)"
                                                                    d="M.295.326a.938.938,0,0,1,1.422,0L7.04,6.22,12.363.326a.938.938,0,0,1,1.422,0,1.2,1.2,0,0,1,0,1.575L8.462,7.8a1.877,1.877,0,0,1-2.844,0L.295,1.9A1.2,1.2,0,0,1,.295.326Z"
                                                                    fill="#8791a3" />
                                                            </svg></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>

                                </div>
                            </div>
                            <div class="row mt-4 bg-white ">
                                <div
                                    class="col-lg-12 col-md-12 col-sm-12  py-3 d-flex justify-content-between align-items-center">
                                    <h4 class="text-dark text-nowrap">Categories.</h4>
                                    <a href="#" class="btn  btn-sm text-white btn-info">Add new category</a>
                                </div>
                                </a>
                            </div>
                            <div class="row pb-3 py-2 bg-white">
                                <div class="col-12 col-md-12 col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Category</th>
                                                    <th scope="col">Product name</th>
                                                    <th scope="col">Description</th>
                                                    <th scope="col">Phone</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Category 1</td>
                                                    <td>2</td>
                                                    <td>
                                                        Lorem ipsum dolor si amet net laid e</td>
                                                    <td> <a
                                                            class="btn btn-sm mx-2 text-danger bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                            X Delete
                                                        </a>
                                                        <a
                                                            class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                            <i class="fas fa-pencil-alt pr-1"></i>Edit
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Category 1</td>
                                                    <td>2</td>
                                                    <td>
                                                        Lorem ipsum dolor si amet net laid e</td>
                                                    <td> <a
                                                            class="btn btn-sm mx-2 text-danger bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                            X Delete
                                                        </a>
                                                        <a
                                                            class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                            <i class="fas fa-pencil-alt pr-1"></i>Edit
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Category 1</td>
                                                    <td>2</td>
                                                    <td>
                                                        Lorem ipsum dolor si amet net laid e</td>
                                                    <td> <a
                                                            class="btn btn-sm mx-2 text-danger bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                            X Delete
                                                        </a>
                                                        <a
                                                            class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                            <i class="fas fa-pencil-alt pr-1"></i>Edit
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Category 1</td>
                                                    <td>2</td>
                                                    <td>
                                                        Lorem ipsum dolor si amet net laid e</td>
                                                    <td> <a
                                                            class="btn btn-sm mx-2 text-danger bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                            X Delete
                                                        </a>
                                                        <a
                                                            class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                            <i class="fas fa-pencil-alt pr-1"></i>Edit
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Category 1</td>
                                                    <td>2</td>
                                                    <td>
                                                        Lorem ipsum dolor si amet net laid e</td>
                                                    <td> <a
                                                            class="btn btn-sm mx-2 text-danger bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                            X Delete
                                                        </a>
                                                        <a
                                                            class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                            <i class="fas fa-pencil-alt pr-1"></i>Edit
                                                        </a>
                                                    </td>
                                                </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="ex-with-icons-tabs-6" role="tabpanel"
                        aria-labelledby="ex-with-icons-tab-6">
                        <div class="container-fluid bg-white">
                            <div class="row  d-flex justify-content-center align-items-center">
                                <div class="col-12">
                                    <h4 class="text-start py-3 px-3">Documents center.</h4>
                                </div>
                                <div class="col-12 col-md-12 col-lg-12mt-5">
                                    <div class="card card-with-dash-border  ">
                                        <form>
                                            <fieldset class="upload_dropZone text-center mb-3 p-4">

                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                    fill="currentColor"
                                                    class="text-primary mt-3 bi bi-file-earmark-arrow-up-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M6.354 9.854a.5.5 0 0 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 8.707V12.5a.5.5 0 0 1-1 0V8.707z" />
                                                </svg>
                                                <h6 class="h4 text-center mb-3 mt-4">Drag and drop a document,</h6>
                                                <div class=" d-flex flex-wrap justify-content-center">
                                                    <span class="text-decoration-none text-dark "> or </span> <a
                                                        href="#"
                                                        class="text-center mb-3 upload_gallery text-decoration-underline px-2 mb-0 ">
                                                        <span class="text-decoration-underline">browse your
                                                            computer</span>
                                                    </a>
                                                </div>
                                                <p class="small my-2 mt-2">Supported files: word, pdf…
                                                </p>
                                                <input id="upload_image_background" data-post-name="image_background"
                                                    data-post-url="https://someplace.com/image/uploads/backgrounds/"
                                                    class="position-absolute invisible" type="file" multiple
                                                    accept="image/jpeg, image/png, image/svg+xml" />
                                            </fieldset>
                                        </form>

                                    </div>

                                </div>
                                <div
                                    class="col-12 col-md-12 col-lg-12 p-4 align-items-center form-control mb-3 d-flex justify-content-between">
                                    <span>document-name.extension</span>
                                    <span>word</span>
                                    <div class="btn-group">
                                        <button class="btn btn-white bg-white text-dark btn-sm dropdown-toggle"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Category
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>category1</li>
                                            <li>category2</li>
                                        </ul>
                                    </div>
                                    <span>
                                        <a href="#" class="btn btn-sm text-white btn-info">
                                            Add
                                        </a>
                                    </span>
                                </div>
                                <div class="col-12 col-md-12 col-lg-12 mt-3">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Document name</th>
                                                    <th scope="col">File type</th>
                                                    <th scope="col">Category</th>
                                                    <th scope="col">State</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>12/07/23</td>
                                                    <td>Document name</td>
                                                    <td>
                                                        PDF</td>
                                                    <td>
                                                        Prescription
                                                    </td>
                                                    <td>
                                                        Online
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-sm text-dark bg-white text-decoration-none text-nowrap px-0 py-2"
                                                            data-bs-toggle="modal" data-bs-target="#document"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                width="13.37" height="14.526"
                                                                viewBox="0 0 13.37 14.526">
                                                                <defs>
                                                                    <clipPath id="clip-path">
                                                                        <rect id="Rectangle_34" data-name="Rectangle 34"
                                                                            width="4.029" height="15.744"
                                                                            fill="#102940" />
                                                                    </clipPath>
                                                                </defs>
                                                                <g id="Group_393" data-name="Group 393"
                                                                    transform="translate(10.329) rotate(41)">
                                                                    <g id="Group_244" data-name="Group 244"
                                                                        transform="translate(0 0)"
                                                                        clip-path="url(#clip-path)">
                                                                        <path id="Path_29" data-name="Path 29"
                                                                            d="M2.014,0A2.016,2.016,0,0,0,0,2.014V12.27a.549.549,0,0,0,.058.245l1.465,2.93a.554.554,0,0,0,.983,0l1.465-2.93a.549.549,0,0,0,.058-.245V2.014A2.016,2.016,0,0,0,2.014,0M2.93,12.14l-.916,1.831L1.1,12.14v-.053H2.93Zm0-1.152H1.1V4.029H2.93Zm0-8.058H1.1V2.014a.916.916,0,1,1,1.831,0Z"
                                                                            transform="translate(0 0)" fill="#102940" />
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                            Edit
                                                        </a>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>12/07/23</td>
                                                    <td>Document name</td>
                                                    <td>
                                                        PDF</td>
                                                    <td>
                                                        Prescription
                                                    </td>
                                                    <td>
                                                        Online
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-sm text-dark bg-white text-decoration-none text-nowrap px-0 py-2"
                                                            data-bs-toggle="modal" data-bs-target="#document"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                width="13.37" height="14.526"
                                                                viewBox="0 0 13.37 14.526">
                                                                <defs>
                                                                    <clipPath id="clip-path">
                                                                        <rect id="Rectangle_34" data-name="Rectangle 34"
                                                                            width="4.029" height="15.744"
                                                                            fill="#102940" />
                                                                    </clipPath>
                                                                </defs>
                                                                <g id="Group_393" data-name="Group 393"
                                                                    transform="translate(10.329) rotate(41)">
                                                                    <g id="Group_244" data-name="Group 244"
                                                                        transform="translate(0 0)"
                                                                        clip-path="url(#clip-path)">
                                                                        <path id="Path_29" data-name="Path 29"
                                                                            d="M2.014,0A2.016,2.016,0,0,0,0,2.014V12.27a.549.549,0,0,0,.058.245l1.465,2.93a.554.554,0,0,0,.983,0l1.465-2.93a.549.549,0,0,0,.058-.245V2.014A2.016,2.016,0,0,0,2.014,0M2.93,12.14l-.916,1.831L1.1,12.14v-.053H2.93Zm0-1.152H1.1V4.029H2.93Zm0-8.058H1.1V2.014a.916.916,0,1,1,1.831,0Z"
                                                                            transform="translate(0 0)" fill="#102940" />
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                            Edit
                                                        </a>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>12/07/23</td>
                                                    <td>Document name</td>
                                                    <td>
                                                        PDF</td>
                                                    <td>
                                                        Prescription
                                                    </td>
                                                    <td>
                                                        Online
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-sm text-dark bg-white text-decoration-none text-nowrap px-0 py-2"
                                                            data-bs-toggle="modal" data-bs-target="#document"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                width="13.37" height="14.526"
                                                                viewBox="0 0 13.37 14.526">
                                                                <defs>
                                                                    <clipPath id="clip-path">
                                                                        <rect id="Rectangle_34" data-name="Rectangle 34"
                                                                            width="4.029" height="15.744"
                                                                            fill="#102940" />
                                                                    </clipPath>
                                                                </defs>
                                                                <g id="Group_393" data-name="Group 393"
                                                                    transform="translate(10.329) rotate(41)">
                                                                    <g id="Group_244" data-name="Group 244"
                                                                        transform="translate(0 0)"
                                                                        clip-path="url(#clip-path)">
                                                                        <path id="Path_29" data-name="Path 29"
                                                                            d="M2.014,0A2.016,2.016,0,0,0,0,2.014V12.27a.549.549,0,0,0,.058.245l1.465,2.93a.554.554,0,0,0,.983,0l1.465-2.93a.549.549,0,0,0,.058-.245V2.014A2.016,2.016,0,0,0,2.014,0M2.93,12.14l-.916,1.831L1.1,12.14v-.053H2.93Zm0-1.152H1.1V4.029H2.93Zm0-8.058H1.1V2.014a.916.916,0,1,1,1.831,0Z"
                                                                            transform="translate(0 0)" fill="#102940" />
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                            Edit
                                                        </a>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>12/07/23</td>
                                                    <td>Document name</td>
                                                    <td>
                                                        PDF</td>
                                                    <td>
                                                        Prescription
                                                    </td>
                                                    <td>
                                                        Online
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-sm text-dark bg-white text-decoration-none text-nowrap px-0 py-2"
                                                            data-bs-toggle="modal" data-bs-target="#document"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                width="13.37" height="14.526"
                                                                viewBox="0 0 13.37 14.526">
                                                                <defs>
                                                                    <clipPath id="clip-path">
                                                                        <rect id="Rectangle_34" data-name="Rectangle 34"
                                                                            width="4.029" height="15.744"
                                                                            fill="#102940" />
                                                                    </clipPath>
                                                                </defs>
                                                                <g id="Group_393" data-name="Group 393"
                                                                    transform="translate(10.329) rotate(41)">
                                                                    <g id="Group_244" data-name="Group 244"
                                                                        transform="translate(0 0)"
                                                                        clip-path="url(#clip-path)">
                                                                        <path id="Path_29" data-name="Path 29"
                                                                            d="M2.014,0A2.016,2.016,0,0,0,0,2.014V12.27a.549.549,0,0,0,.058.245l1.465,2.93a.554.554,0,0,0,.983,0l1.465-2.93a.549.549,0,0,0,.058-.245V2.014A2.016,2.016,0,0,0,2.014,0M2.93,12.14l-.916,1.831L1.1,12.14v-.053H2.93Zm0-1.152H1.1V4.029H2.93Zm0-8.058H1.1V2.014a.916.916,0,1,1,1.831,0Z"
                                                                            transform="translate(0 0)" fill="#102940" />
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                            Edit
                                                        </a>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>12/07/23</td>
                                                    <td>Document name</td>
                                                    <td>
                                                        PDF</td>
                                                    <td>
                                                        Prescription
                                                    </td>
                                                    <td>
                                                        Online
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-sm text-dark bg-white text-decoration-none text-nowrap px-0 py-2"
                                                            data-bs-toggle="modal" data-bs-target="#document"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                width="13.37" height="14.526"
                                                                viewBox="0 0 13.37 14.526">
                                                                <defs>
                                                                    <clipPath id="clip-path">
                                                                        <rect id="Rectangle_34" data-name="Rectangle 34"
                                                                            width="4.029" height="15.744"
                                                                            fill="#102940" />
                                                                    </clipPath>
                                                                </defs>
                                                                <g id="Group_393" data-name="Group 393"
                                                                    transform="translate(10.329) rotate(41)">
                                                                    <g id="Group_244" data-name="Group 244"
                                                                        transform="translate(0 0)"
                                                                        clip-path="url(#clip-path)">
                                                                        <path id="Path_29" data-name="Path 29"
                                                                            d="M2.014,0A2.016,2.016,0,0,0,0,2.014V12.27a.549.549,0,0,0,.058.245l1.465,2.93a.554.554,0,0,0,.983,0l1.465-2.93a.549.549,0,0,0,.058-.245V2.014A2.016,2.016,0,0,0,2.014,0M2.93,12.14l-.916,1.831L1.1,12.14v-.053H2.93Zm0-1.152H1.1V4.029H2.93Zm0-8.058H1.1V2.014a.916.916,0,1,1,1.831,0Z"
                                                                            transform="translate(0 0)" fill="#102940" />
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                            Edit
                                                        </a>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>12/07/23</td>
                                                    <td>Document name</td>
                                                    <td>
                                                        PDF</td>
                                                    <td>
                                                        Prescription
                                                    </td>
                                                    <td>
                                                        Online
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-sm text-dark bg-white text-decoration-none text-nowrap px-0 py-2"
                                                            data-bs-toggle="modal" data-bs-target="#document"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                width="13.37" height="14.526"
                                                                viewBox="0 0 13.37 14.526">
                                                                <defs>
                                                                    <clipPath id="clip-path">
                                                                        <rect id="Rectangle_34" data-name="Rectangle 34"
                                                                            width="4.029" height="15.744"
                                                                            fill="#102940" />
                                                                    </clipPath>
                                                                </defs>
                                                                <g id="Group_393" data-name="Group 393"
                                                                    transform="translate(10.329) rotate(41)">
                                                                    <g id="Group_244" data-name="Group 244"
                                                                        transform="translate(0 0)"
                                                                        clip-path="url(#clip-path)">
                                                                        <path id="Path_29" data-name="Path 29"
                                                                            d="M2.014,0A2.016,2.016,0,0,0,0,2.014V12.27a.549.549,0,0,0,.058.245l1.465,2.93a.554.554,0,0,0,.983,0l1.465-2.93a.549.549,0,0,0,.058-.245V2.014A2.016,2.016,0,0,0,2.014,0M2.93,12.14l-.916,1.831L1.1,12.14v-.053H2.93Zm0-1.152H1.1V4.029H2.93Zm0-8.058H1.1V2.014a.916.916,0,1,1,1.831,0Z"
                                                                            transform="translate(0 0)" fill="#102940" />
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                            Edit
                                                        </a>

                                                    </td>
                                                </tr>

                                        </table>
                                        <nav aria-label="Page navigation ">
                                            <ul class="pagination d-flex justify-content-end">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="#" aria-label="Previous">
                                                        <span aria-hidden="true"><svg style="transform: rotate(90deg);"
                                                                xmlns="http://www.w3.org/2000/svg" width="14.08"
                                                                height="8.448" viewBox="0 0 14.08 8.448">
                                                                <path id="Vector_22_Stroke_"
                                                                    data-name="Vector 22 (Stroke)"
                                                                    d="M.295.326a.938.938,0,0,1,1.422,0L7.04,6.22,12.363.326a.938.938,0,0,1,1.422,0,1.2,1.2,0,0,1,0,1.575L8.462,7.8a1.877,1.877,0,0,1-2.844,0L.295,1.9A1.2,1.2,0,0,1,.295.326Z"
                                                                    fill="#8791a3" />
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="page-item disabled"><a class="page-link"
                                                        href="#">Page
                                                        1/3</a></li>
                                                <!-- <li class="page-item"><a class="page-link" href="#">2</a></li> -->
                                                <!-- <li class="page-item"><a class="page-link" href="#">3</a></li> -->
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Next">
                                                        <span aria-hidden="true"><svg
                                                                style=" transform: rotate(270deg);"
                                                                xmlns="http://www.w3.org/2000/svg" width="14.08"
                                                                height="8.448" viewBox="0 0 14.08 8.448">
                                                                <path id="Vector_22_Stroke_"
                                                                    data-name="Vector 22 (Stroke)"
                                                                    d="M.295.326a.938.938,0,0,1,1.422,0L7.04,6.22,12.363.326a.938.938,0,0,1,1.422,0,1.2,1.2,0,0,1,0,1.575L8.462,7.8a1.877,1.877,0,0,1-2.844,0L.295,1.9A1.2,1.2,0,0,1,.295.326Z"
                                                                    fill="#8791a3" />
                                                            </svg></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade " id="ex-with-icons-tabs-7" role="tabpanel"
                        aria-labelledby="ex-with-icons-tab-7">
                        <div class="container-fluid bg-white">
                            <div class="row ">
                                <div class="col-12 col-md-6 col-lg-6 align-items-center d-flex justify-content-center">
                                    <div class=" bg-white d-flex justify-content-between">
                                        <span class="px-3">Appointment reminder</span> <span
                                            class="px-3">Invoice</span>
                                        <span class="px-3">Administrative</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12 col-lg-12 d-flex justify-content-center">
                                    <form action="">
                                        <div class="row align-items-center d-flex justify-content-center">
                                            <div class="col-12 col-md-6 mt-3">
                                                <h6 class="px-2 text-nowrap mb-2">Notification support.</h6>
                                                <div class="row">
                                                    <div
                                                        class="col-12 d-flex align-items-center justify-content-between mt-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="mail" value="" id="flexCheckMail">
                                                            <label class="form-check-label"
                                                                for="flexCheckMail">Mail</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="sms" value="" id="flexCheckSMS">
                                                            <label class="form-check-label"
                                                                for="flexCheckSMS">SMS</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="app-noti" value="" id="flexCheckAppNoti">
                                                            <label class="form-check-label"
                                                                for="flexCheckAppNoti">In-app
                                                                notification</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 mt-3">
                                                <h6 class="px-2 text-nowrap">Reminder frequency.</h6>
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <div class="mb-3">
                                                            <label for="afterDays" class="form-label">After</label>
                                                            <input type="number" name="afterDays"
                                                                class="form-control" id="afterDays"
                                                                placeholder="days">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="mb-3">
                                                            <label for="everyDays" class="form-label">Every</label>
                                                            <input type="number" name="everyDays"
                                                                class="form-control" id="everyDays"
                                                                placeholder=" days">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row align-items-center">
                                            <div class="col-12 col-md-7 mt-3">
                                                <h6 class="px-2 text-nowrap mb-2">Email notification.</h6>
                                                <div class="row">
                                                    <div class="col-12 col-md-6 align-items-center">
                                                        <div class="mb-3 mt-2">
                                                            <label for="object" class="form-label">Object</label>
                                                            <input type="text" class="form-control" id="object"
                                                                placeholder="">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="msg1" class="form-label">Message</label>
                                                            <textarea class="form-control text-justify" id="msg1" name="msg1" rows="6" cols="6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pulvinar</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6 mid-msg">
                                                        <div class="mb-3 mt-2">
                                                            <div class="row gx-2">
                                                                <div class=" col-12 col-md-6 col-lg-6">
                                                                    <b>Shortcode</b>
                                                                    <br>
                                                                    <small>{name}</small>
                                                                    <br>
                                                                    <small>{clinic_name}</small>
                                                                    <br>
                                                                    <small>{appointment_date}</small>
                                                                    <br>
                                                                    <small>{appointment_time}</small>
                                                                </div>
                                                                <div class="col-12 col-md-6 col-lg-6">
                                                                    <b>Description</b>
                                                                    <br>
                                                                    <small>Patient name</small>
                                                                    <br>
                                                                    <small>Clinic name</small>
                                                                    <br>
                                                                    <small>Appointment
                                                                        date</small>
                                                                    <br>
                                                                    <small>Appointment
                                                                        time</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5 mt-3">
                                                <h6 class="px-2 text-nowrap">SMS notification.</h6>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="mb-3 mt-2">
                                                            <label for="msg2" class="form-label">Message</label>
                                                            <textarea class="form-control text-justify" id="msg2" name="msg2" rows="6" cols="6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pulvinar, orci vitae molestie dapibus,</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mx-auto pb-4 ">
                                            <div class="d-grid  col-6 mx-auto ">
                                                <button class="btn btn-info text-white " type="button">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container col-sm-12 col-md-3 col-lg-3 help-sm ms-5 rounded-3">
                <div class="card">
                    <div class="card-header bg-white">
                        <h4 class="text-dark">Help & Support</h4>
                    </div>
                    <div class="accordion accordion-flush help-support" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <div class="accordion-content">
                                        <h5 class="accord-h ">Getting started</h5>
                                        <i class="fa fa-angle-right px-2" aria-hidden="true"></i>
                                    </div>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body p-0">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item text-muted">Modify my profile</li>
                                        <li class="list-group-item text-muted">Add a patient</li>
                                        <li class="list-group-item text-muted">Calendar</li>
                                        <li class="list-group-item text-muted">Tools and services</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="accordion-content">
                                        <h5 class="accord-h ">Features</h5>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </div>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body p-0">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item text-muted">Modify my profile</li>
                                        <li class="list-group-item text-muted">Add a patient</li>
                                        <li class="list-group-item text-muted">Calendar</li>
                                        <li class="list-group-item text-muted">Tools and services</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    <div class="accordion-content">
                                        <h5 class="accord-h">Treatment plans</h5>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </div>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body p-0">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item text-muted">Modify my profile</li>
                                        <li class="list-group-item text-muted">Add a patient</li>
                                        <li class="list-group-item text-muted">Calendar</li>
                                        <li class="list-group-item text-muted">Tools and services</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <div class="accordion-content">
                                        <h5 class="accord-h">Recommendations</h5>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </div>
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body p-0">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item text-muted">Modify my profile</li>
                                        <li class="list-group-item text-muted">Add a patient</li>
                                        <li class="list-group-item text-muted">Calendar</li>
                                        <li class="list-group-item text-muted">Tools and services</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <div class="accordion-content">
                                        <h5 class="accord-h ">Mobile application</h5>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </div>
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body p-0">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item text-muted">Modify my profile</li>
                                        <li class="list-group-item text-muted">Add a patient</li>
                                        <li class="list-group-item text-muted">Calendar</li>
                                        <li class="list-group-item text-muted">Tools and services</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center pb-4"> <a href="#" class="btn btn-info text-white">Contact
                            support</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- add new user --}}
    <div class="modal fade" id="addnewuser" tabindex="-1" aria-labelledby="addnewuserLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header   no-border-bottom d-flex justify-content-center align-items-center">
                    <div class="d-flex flex-column justify-content-center align-items-center w-full">
                        <h5 class="modal-title fw-bold" id="addnewuser">Add new user</h5>
                    </div>
                    <a type="" class="" data-bs-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28">
                            <g id="Group_252" data-name="Group 252" transform="translate(-573.941 -28.352)">
                                <g id="Ellipse_1" data-name="Ellipse 1" transform="translate(573.941 28.352)"
                                    fill="#eff1f2" stroke="#102940" stroke-width="1">
                                    <circle cx="14" cy="14" r="14" stroke="none" />
                                    <circle cx="14" cy="14" r="13.5" fill="none" />
                                </g>
                                <g id="Group_212" data-name="Group 212"
                                    transform="translate(587.991 31.377) rotate(45)">
                                    <line id="Line_2" data-name="Line 2" y2="15.591"
                                        transform="translate(7.986)" fill="none" stroke="#102940"
                                        stroke-linecap="round" stroke-width="2" />
                                    <line id="Line_3" data-name="Line 3" x2="15.591"
                                        transform="translate(0 7.985)" fill="none" stroke="#102940"
                                        stroke-linecap="round" stroke-width="2" />
                                </g>
                            </g>
                        </svg>
                    </a>
                </div>
                <div class="modal-body">
                    <form role="form" method="POST" action="">
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control form-control-sm" id="name"
                                    name="name">
                            </div>
                            <div class="col-md-4">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control form-control-sm" id="email"
                                    name="email">
                            </div>
                            <div class="col-md-4">
                                <label for="role" class="form-label">Role</label>
                                <select class="form-select form-select-sm" name="role"
                                    aria-label=".form-select-sm example">
                                    <option selected>Administrator</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="newsletter" value=""
                                        id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Subscribe to the newsletter?
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="comments" class="form-label">Comments</label>
                                <textarea class="form-control" id="comments" name="comments" rows="3"></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="password" class="form-label">Access password</label>
                                <input type="password" class="form-control form-control-sm" id="password"
                                    name="password">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-2"></div>
                            <div class="d-grid  col-md-6 ">
                                <button type="submit" class="btn btn-info btn-sm text-white">Add and send
                                    email</button>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- modal add new supplier --}}
    <div class="modal fade" id="addnewsupplier" tabindex="-1" aria-labelledby="addnewsupplierLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header   no-border-bottom d-flex justify-content-center align-items-center">
                    <div class="d-flex flex-column justify-content-center align-items-center w-full">
                        <h5 class="modal-title fw-bold" id="addnewsupplier">Add new supplier</h5>
                    </div>
                    <a type="" class="" data-bs-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28">
                            <g id="Group_252" data-name="Group 252" transform="translate(-573.941 -28.352)">
                                <g id="Ellipse_1" data-name="Ellipse 1" transform="translate(573.941 28.352)"
                                    fill="#eff1f2" stroke="#102940" stroke-width="1">
                                    <circle cx="14" cy="14" r="14" stroke="none" />
                                    <circle cx="14" cy="14" r="13.5" fill="none" />
                                </g>
                                <g id="Group_212" data-name="Group 212"
                                    transform="translate(587.991 31.377) rotate(45)">
                                    <line id="Line_2" data-name="Line 2" y2="15.591"
                                        transform="translate(7.986)" fill="none" stroke="#102940"
                                        stroke-linecap="round" stroke-width="2" />
                                    <line id="Line_3" data-name="Line 3" x2="15.591"
                                        transform="translate(0 7.985)" fill="none" stroke="#102940"
                                        stroke-linecap="round" stroke-width="2" />
                                </g>
                            </g>
                        </svg>
                    </a>
                </div>
                <div class="modal-body">
                    <form role="form" method="POST" action="">
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control form-control-sm" id="name"
                                    name="name" value="" placeholder=" Supplier name">
                            </div>
                            <div class="col-md-4">
                                <label for="supp-id" class="form-label">ID</label>
                                <input type="text" class="form-control form-control-sm" id="supp-id"
                                    name="supp-id" value="" placeholder="supplier ID">
                            </div>
                            <div class="col-md-4">

                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control form-control-sm" id="address"
                                    name="address">
                            </div>
                            <div class="col-md-4">
                                <label for="npa" class="form-label">NPA</label>
                                <input type="text" class="form-control form-control-sm" id="npa"
                                    name="npa">
                            </div>
                            <div class="col-md-4">
                                <label for="country" class="form-label">Country</label>
                                <input type="text" class="form-control form-control-sm" id="country"
                                    name="country">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="phone" class="form-control form-control-sm" id="phone"
                                    name="phone">
                            </div>
                            <div class="col-md-4">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control form-control-sm" id="email"
                                    name="email">
                            </div>
                            <div class="col-md-4">
                                <label for="site-web" class="form-label">Site Web</label>
                                <input type="text" class="form-control form-control-sm" id="site-web"
                                    name="site-web">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="deliv-time" class="form-label">Delivery time (average)</label>
                                <input type="text" class="form-control form-control-sm" id="deliv-time"
                                    name="deliv-time">
                            </div>
                            <div class="col-md-4">

                            </div>
                            <div class="col-md-4">

                            </div>

                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="comments" class="form-label">Comments</label>
                                <textarea class="form-control" id="comments" name="comments" rows="3"></textarea>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-2"></div>
                            <div class="d-grid  col-md-6 ">
                                <button type="submit" class="btn btn-info btn-sm text-white">Add new
                                    supplier</button>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- payment modal --}}
    <div class="modal fade" id="payment-method" tabindex="-1" aria-labelledby="payment-methodLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header   no-border-bottom d-flex justify-content-center align-items-center">
                    <div class="d-flex flex-column justify-content-center align-items-center w-full">
                        <h5 class="modal-title fw-bold" id="payment">Modify / Add payment</h5>
                    </div>
                    <a type="" class="" data-bs-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28">
                            <g id="Group_252" data-name="Group 252" transform="translate(-573.941 -28.352)">
                                <g id="Ellipse_1" data-name="Ellipse 1" transform="translate(573.941 28.352)"
                                    fill="#eff1f2" stroke="#102940" stroke-width="1">
                                    <circle cx="14" cy="14" r="14" stroke="none" />
                                    <circle cx="14" cy="14" r="13.5" fill="none" />
                                </g>
                                <g id="Group_212" data-name="Group 212"
                                    transform="translate(587.991 31.377) rotate(45)">
                                    <line id="Line_2" data-name="Line 2" y2="15.591"
                                        transform="translate(7.986)" fill="none" stroke="#102940"
                                        stroke-linecap="round" stroke-width="2" />
                                    <line id="Line_3" data-name="Line 3" x2="15.591"
                                        transform="translate(0 7.985)" fill="none" stroke="#102940"
                                        stroke-linecap="round" stroke-width="2" />
                                </g>
                            </g>
                        </svg>
                    </a>
                </div>
                <div class="modal-body">
                    <form role="form" method="POST" action="">
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="pay-method" class="form-label">Payment method</label>
                                <select class="form-select form-select-sm" name="pay-method"
                                    aria-label=".form-select-sm example">
                                    <option selected>Bank Trasnfer</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="pay-term" class="form-label">Payment terms</label>
                                <input type="text" class="form-control form-control-sm" id="pay-term"
                                    name="pay-term">
                            </div>
                            <div class="col-md-4">
                                <label for="avai-for" class="form-label">Available for</label>
                                <input type="text" class="form-control form-control-sm" id="avai-for"
                                    name="avai-for" placeholder="Type of insurance">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-5">
                                <label for="comments" class="form-label">Comments</label>
                                <textarea class="form-control" id="comments" name="comments" rows="3"></textarea>
                            </div>
                            <div class="col-md-7">
                                <div class="form-check">
                                    <input class="form-check-input" name="post-pay" type="checkbox" value=""
                                        id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Do not post for delinquent patients.
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="act-pay" type="checkbox" value=""
                                        id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Activate payment method
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-2"></div>
                            <div class="d-grid  col-md-6 ">
                                <button type="submit" class="btn btn-info btn-sm text-white">Save</button>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    {{-- edit doc modal --}}
    <div class="modal fade" id="document" tabindex="-1" aria-labelledby="documentLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header   no-border-bottom d-flex justify-content-center align-items-center">
                    <div class="d-flex flex-column justify-content-center align-items-center w-full">
                        <h5 class="modal-title fw-bold" id="payment">Edit document</h5>
                    </div>
                    <a type="" class="" data-bs-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28">
                            <g id="Group_252" data-name="Group 252" transform="translate(-573.941 -28.352)">
                                <g id="Ellipse_1" data-name="Ellipse 1" transform="translate(573.941 28.352)"
                                    fill="#eff1f2" stroke="#102940" stroke-width="1">
                                    <circle cx="14" cy="14" r="14" stroke="none" />
                                    <circle cx="14" cy="14" r="13.5" fill="none" />
                                </g>
                                <g id="Group_212" data-name="Group 212"
                                    transform="translate(587.991 31.377) rotate(45)">
                                    <line id="Line_2" data-name="Line 2" y2="15.591"
                                        transform="translate(7.986)" fill="none" stroke="#102940"
                                        stroke-linecap="round" stroke-width="2" />
                                    <line id="Line_3" data-name="Line 3" x2="15.591"
                                        transform="translate(0 7.985)" fill="none" stroke="#102940"
                                        stroke-linecap="round" stroke-width="2" />
                                </g>
                            </g>
                        </svg>
                    </a>
                </div>
                <div class="modal-body">
                    <form role="form" method="POST" action="">
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="pay-term" class="form-label">Document</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-info" id="basic-addon1"><i
                                            class="fas fa-file text-white"></i></span>
                                    <input type="text" class="form-control form-control-sm" name="doc"
                                        aria-label="doc" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="doc-name" class="form-label">Document name</label>
                                <input type="text" class="form-control form-control-sm" id="doc-name"
                                    name="doc-name">
                            </div>
                            <div class="col-md-6">
                                <label for="category" class="form-label">Category</label>
                                <select class="form-select form-select-sm" name="category"
                                    aria-label=".form-select-sm example">
                                    <option selected>Category</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" name="online" type="checkbox" value=""
                                        id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Online
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-2"></div>
                            <div class="d-grid  col-md-6 ">
                                <button type="submit" class="btn btn-info btn-sm text-white">Save</button>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection

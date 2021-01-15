import axios from 'axios'


export const baseURL = 'http://localhost:8000/api'
export const registerUrl = `${baseURL}/register`
export const loginUrl = `${baseURL}/login`
export const addMovie = `${baseURL}/movies/add`
export const addCategory = `${baseURL}/categories/add`

export const getAllMovies = `${baseURL}/movies`
export const getAllCategories = `${baseURL}/categories`
export const getMovieById = `${baseURL}/movies/`
export const getMovieByCategory = `${baseURL}/categories/`







export const getMovies = async () => {
    const result = await axios.get(getAllMovies)
    .then(( {data} ) => data)
    
    return result
    }





























//TODO
// export const login = async (creds) => {
//     try {
//         const response = await axios.post(loginUrl, creds)
//         return response.data
//     } catch (error) {
//         console.error('Error', error.response)
//         return false
//     }
// }

// export const register = async (creds) => {
//     try {
//         const response = await axios.post(registerUrl, creds)
//         return response.data
//     } catch (error) {
//             console.error('Error', error.response)
//             return false
//     }
// }

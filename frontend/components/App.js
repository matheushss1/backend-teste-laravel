import Header from './Header'
import ExploreCommunity from './ExploreCommunity'
const App = (props) => {

    return (
        <>
            <Header info={props} />
            <ExploreCommunity info={props} />
        </>
    )
}
export default App;